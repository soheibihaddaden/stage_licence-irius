<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Galleries;
use App\Models\Posts;
use App\Http\Requests\Auth\Post\CreateRequest;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    
    public function index()
    {

          $posts= Posts::with(['gallery','category'])->get();
          return view('auth.posts.index',['posts'=>$posts]);


    }

    public function create()
    {
        $categories= Categories::all();
        return view('auth.posts.create' , ['categories' => $categories]);
    }


    public function store(CreateRequest $request)
    {
        $gallery = null;
        try {
             DB::beginTransaction();

           if($request->has('file'))
        {
            $file = $request->file('file');
            $fileName=time().$file->getClientOriginalName();
           
             $imagePath=public_path('images/posts');

            $file->move($imagePath , $fileName);

               $gallery= Galleries::create(
            [
              'image' => $fileName
            ]

        );

        }
        
         Posts::create(
            [

                'category_id' => $request->category,
                'title'=> $request->title,
                'description'=>$request->description,
                'is_publish'=> $request->is_publish,
                'gallery_id' => $gallery ? $gallery->id : null 
            ]


        );

        DB::commit(); 
    
    }catch(\Execption $ex)
    {
        DB::rollBack();
         dd($ex->getMessage());
    }

        $request->session()->flash('alert-success' ,'post created');
        return to_route('posts.index');

    }

   
    public function show($id)
    {
       
        $post = Posts::findOrFail($id);
        return view('auth.showpost', compact('post'));


    }


  
    public function edit($id)
    {
        
        $post = Posts::findOrFail($id);

        $categories = Categories::all(); // assuming you have a Category model
        
        return view('auth.postedit', compact('post', 'categories'));

    
    }



    public function update(CreateRequest $request, string $id)
    {
   
        $post = Posts::findOrFail($id);
        $post->title = $request->input('title');
        $post->category_id = $request->input('category');
        $post->is_publish = $request->input('is_publish');
        $post->description = $request->input('description');
    
        if ($request->hasFile('file')) {
            // Handle file upload
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('images/posts'), $fileName);
    
            // Update the gallery
            if ($post->gallery) {
                $gallery = $post->gallery;
            } else {
                $gallery = new Galleries();
            }
            $gallery->image = $fileName;
            $gallery->save();
    
            $post->gallery_id = $gallery->id;
        }
    
        $post->save();
    


    return redirect()->route('posts.index')->with('success', 'Post updated successfully');

    }




    public function destroy(string $id)
    {
    
    $post = Posts::findOrFail($id);
    $post->delete();
    return back();

    
}

    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Posts::where('title', 'LIKE', "%{$query}%")
        ->orWhere(function($q) use ($query) {
           $q->where('description', 'LIKE', "%{$query}%")
             ->where('is_publish', true);
        })
        ->paginate(10); 

        return view('website.blog.search', ['posts' => $posts]);
    }

    

}

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

   
    public function show(string $id)
    {
        

    }

  
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

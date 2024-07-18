<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class websitecontroller extends Controller
{
    public function home()
    {

        $latestposts=Posts::orderBy('id','desc')->take(5)->get();

        $posts = Posts::where('is_publish', Posts::Published)->paginate(5);
        return view('website.blog.index', ['posts' => $posts ,'latestposts' => $latestposts, ]);        
         

    } 



    public function show(Posts $post)
    {
          
        return view('website.blog.single', ['post' => $post]);  
        
        

    } 





    public function agenda()
    {
            $posts = Posts::where('is_publish', Posts::Published)
                           ->whereHas('category', function ($query) {
                               $query->where('name', 'Agenda');
                           })
                           ->paginate(5);
        
            return view('website.blog.Evenements.agenda', ['posts' => $posts]);
    }
        

    


    public function diplomes()
    { 

        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Diplomes');
        })
        ->paginate(5);


        
         return view('website.blog.Evenements.diplomes', ['posts' => $posts]);


    }
    
    public function conferences()
    {

     $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Conferences');
        })
        ->paginate(5);

        

        return view('website.blog.Evenements.conferences', ['posts' => $posts]);        
        
      

    }
    
    public function soirees()
    {


        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'soirees');
        })
        ->paginate(5);

        

        return view('website.blog.Evenements.soirees', ['posts' => $posts]);        
         
    

    }



    public function NosEAD()
    {


        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Nos EAD');
        })
        ->paginate(5);


        return view('website.blog.NousLesCaweb.NosEad', ['posts' => $posts]);        
         
    

    }

    public function MhistoiresCAWEB()
    {

        
        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Meilleures histoires CAWEB');
        })
        ->paginate(5);

        return view('website.blog.NousLesCaweb.Mhistoire', ['posts' => $posts]);        
         
    

    }

    public function anciensCAWEB()
    {


        
        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Histoires d\'anciens CAWEB');
        })
        ->paginate(5);



        return view('website.blog.NousLesCaweb.anciensCaweb', ['posts' => $posts]);        
         
    

    }


    public function Quisommesnous()
    {


        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Qui sommes nous?');
        })
        ->paginate(5);


        return view('website.blog.DecouvrirLassociation.quisommesnous', ['posts' => $posts]);        
         
    

    }

    public function Membres()
    {

        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Membres du Bureau');
        })
        ->paginate(5);

        return view('website.blog.DecouvrirLassociation.membres', ['posts' => $posts]);        
         
    

    }
    
    public function projets()
    {


        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Nos projets');
        })
        ->paginate(5);

        return view('website.blog.DecouvrirLassociation.projets', ['posts' => $posts]);        
         
    }

  

 

    public function photos()
    {

        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Photos');
        })
        ->paginate(5);

        return view('website.blog.Galerie.photos', ['posts' => $posts]);        
         
    }



    public function partenairesprivees()
    {


        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Partenaires privés');
        })
        ->paginate(5);

        return view('website.blog.NosPartenaires.partenairesprivees', ['posts' => $posts]);        
         
    }


    public function parternaireassociatifs()
    {

        $posts = Posts::where('is_publish', Posts::Published)
        ->whereHas('category', function ($query) {
            $query->where('name', 'Partenaires associatifs');
        })
        ->paginate(5);


        return view('website.blog.NosPartenaires.paternairesassociatifs', ['posts' => $posts]);        
         
    }


    



     public function single()
    {

        return view('website.blog.single');
    }
 




}

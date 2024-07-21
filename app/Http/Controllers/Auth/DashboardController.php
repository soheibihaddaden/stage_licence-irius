<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;

use App\Models\Message;

class DashboardController extends Controller
{
    
    public function dashboard()
    {
      $publishedPostCount = Posts::where('is_publish', Posts::Published)->count();
      $DraftPostCount = Posts::where('is_publish', Posts::Draft)->count();
      $usercount=User::count();
    
       return view('auth.dashboard' , compact('publishedPostCount','DraftPostCount','usercount')); 
    
    }

    public function messages()
    {

           $messages=Message::all();
           return view('auth.messages.index', ['messages'=>$messages]);

    }

    



}

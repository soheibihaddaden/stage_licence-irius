<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; 
use App\Models\Message;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.auth', function ($view) {
            
            $latestMessages = Message::latest('id')->take(4)->get();
    
            $totalMessagesCount = Message::count();
    
            $remainingMessagesCount = $totalMessagesCount - 4;
    
            // Passer les messages et les comptes à la vue
            $view->with([
                'messages' => $latestMessages,
                'remainingMessagesCount' => $remainingMessagesCount
            ]);
        });
    }
    
}

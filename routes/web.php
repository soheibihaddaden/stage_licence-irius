<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\websitecontroller;
use App\Http\Controllers\Messagecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(WebsiteController::class)->group(function()
{

    Route::get('/', 'home')->name('home');


Route::get('/agenda', 'agenda')->name('agenda');
Route::get('/conferences', 'conferences')->name('conferences');
Route::get('/diplomes', 'diplomes')->name('diplomes');
Route::get('/soirees', 'soirees')->name('soirees');


Route::get('/NosEAD', 'NosEAD')->name('NosEAD');
Route::get('/MhistoiresCAWEB', 'MhistoiresCAWEB')->name('MhistoiresCAWEB');
Route::get('/anciensCAWEB', 'anciensCAWEB')->name('anciensCAWEB');



Route::get('/quisommesnous', 'Quisommesnous')->name('quisommesnous');
Route::get('/membres', 'Membres')->name('membres');
Route::get('/projets', 'projets')->name('projets');


Route::get('/partenairesprivees', 'partenairesprivees')->name('partenairesprivees');
Route::get('/photos',  'photos')->name('photos');
Route::get('/parternaireassociatifs', 'parternaireassociatifs')->name('parternaireassociatifs');


Route::get('/posts/{post}', 'show')->name('website.posts.show');


Route::get('/gallerie', 'gallerie')->name('gallerie');
Route::get('/single', 'single')->name('single');




});


Auth::routes();

Route::get('auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard')->middleware('auth');

Route::resource('auth/posts',PostController::class);

Route::view('contact','website.blog.contact')->name('contact');

Route::resource('/contacter-nous',MessageController::class);

Route::get('auth/messages', [DashboardController::class, 'messages'])->name('auth.messages');

Route::get('auth/messages/{id}', [MessageController::class, 'show'])->name('messages.show');


Route::get('/messages/new-count', [MessageController::class, 'newMessageCount'])->name('messages.new.count');


Route::get('/search/posts', [PostController::class, 'search'])->name('search.posts');


Route::get('/post/details/{id}', [PostController::class, 'show'])->name('post.show');


Route::delete('/post/drop/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\websitecontroller;

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

Route::get('/', [WebsiteController::class ,'home'])->name('home');


Route::get('/agenda', [WebsiteController::class ,'agenda'])->name('agenda');
Route::get('/conferences', [WebsiteController::class ,'conferences'])->name('conferences');
Route::get('/diplomes', [WebsiteController::class ,'diplomes'])->name('diplomes');
Route::get('/soirees', [WebsiteController::class ,'soirees'])->name('soirees');


Route::get('/NosEAD', [WebsiteController::class ,'NosEAD'])->name('NosEAD');
Route::get('/MhistoiresCAWEB', [WebsiteController::class ,'MhistoiresCAWEB'])->name('MhistoiresCAWEB');
Route::get('/anciensCAWEB', [WebsiteController::class ,'anciensCAWEB'])->name('anciensCAWEB');



Route::get('/quisommesnous', [WebsiteController::class ,'Quisommesnous'])->name('quisommesnous');
Route::get('/membres', [WebsiteController::class ,'Membres'])->name('membres');
Route::get('/projets', [WebsiteController::class ,'projets'])->name('projets');


Route::get('/partenairesprivees', [WebsiteController::class ,'partenairesprivees'])->name('partenairesprivees');
Route::get('/photos', [WebsiteController::class ,'photos'])->name('photos');
Route::get('/parternaireassociatifs', [WebsiteController::class ,'parternaireassociatifs'])->name('parternaireassociatifs');






Route::get('/posts/{post}', [WebsiteController::class ,'show'])->name('website.posts.show');





Route::get('/gallerie', [WebsiteController::class ,'gallerie'])->name('gallerie');

Route::get('/single', [WebsiteController::class ,'single'])->name('single');



Auth::routes();

Route::get('auth/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard')->middleware('auth');

Route::resource('auth/posts',PostController::class);

Route::view('contact','website.blog.contact');



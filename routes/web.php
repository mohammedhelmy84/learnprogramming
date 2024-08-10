<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::view('/', 'welcome')->name('welcome'); 

//Route::get('/',[HomeController::class,'index'])->name('home');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

//Route::get('posts/{postId}', [PostController::class, 'show'])->name('post.show'); 
// Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show'); 


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// ...


Route::middleware('auth')->group(function () {
    // Route::Middleware('is_admin')->group(function(){
        Route::resource('categories', \App\Http\Controllers\CategoryController::class); 
        Route::resource('admin', \App\Http\Controllers\AdminController::class);
        Route::resource('posts', \App\Http\Controllers\PostController::class);

    // });
    //Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware(\App\Http\Middleware\IsAdminMiddleware::class); 
    //Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware('is_admin');
    
 

});


// Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware('auth');

Route::resource('/', \App\Http\Controllers\MainpageController::class);
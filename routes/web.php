<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix'=>'/admin', 'middleware' => 'admin'], function (){
    Route::group(['namespace' => 'Post'], function (){
        Route::get('/posts', 'IndexController')->name('admin.post.index');
        Route::get('/posts/create', 'CreateViewController')->name('admin.post.create');
        Route::post('/posts', 'StoreController')->name('admin.post.store');
        Route::get('/posts/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/posts/{post}/edit', 'EditViewController')->name('admin.post.edit');
        Route::patch('/posts/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/posts/{post}', 'DestroyController')->name('admin.post.delete');

    });
});

Route::group(['namespace' => 'App\Http\Controllers\Post'], function (){
        Route::get('/posts', 'IndexController')->name('posts.index');
        Route::get('/posts/create', 'CreateViewController')->name('posts.create');
        Route::post('/posts', 'StoreController')->name('posts.store');
        Route::get('/posts/{post}', 'ShowController')->name('posts.show');
        Route::get('/posts/{post}/edit', 'EditViewController')->name('posts.edit');
        Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
        Route::delete('/posts/{post}', 'DestroyController')->name('posts.delete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

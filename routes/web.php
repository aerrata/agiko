<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('welcome');
Route::get('/blog', [App\Http\Controllers\PageController::class, 'blog'])->name('blog');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::post('post/{post}/restore', [App\Http\Controllers\PostController::class, 'restore'])->name('post.restore')->withTrashed();
    Route::resource('post', App\Http\Controllers\PostController::class)->except(['show']);
});
Route::get('post/{post}',[App\Http\Controllers\PostController::class, 'show'])->name('post.show');

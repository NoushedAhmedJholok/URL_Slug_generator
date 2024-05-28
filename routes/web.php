<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\PostController::class, 'post'])->name('post');
Route::post('/post/create', [App\Http\Controllers\PostController::class, 'postcreate'])->name('postcreate');
Route::get('/post/single/{slug}', [App\Http\Controllers\PostController::class, 'singlepost'])->name('singlepost');

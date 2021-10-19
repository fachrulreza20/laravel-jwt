<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersegiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/persegi',[PersegiController::class, 'index'])->name('homeindex');
Route::resource('/posts', PostController::class)->middleware('auth');
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/about', [HomeController::class,'about'])->name('home.about');


//Authentication
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginStore'])->name('login.store');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/post/create', [PostController::class,'create'])->name('post.create');
Route::post('/post/store', [PostController::class,'store'])->name('post.store');


<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/about', [HomeController::class,'about'])->name('home.about');
Route::get('/login', [HomeController::class,'login'])->name('home.login');

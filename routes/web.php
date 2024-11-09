<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[ProductController::class,'index']);
Route::get('/create',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store'])->name('store');

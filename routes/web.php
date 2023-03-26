<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');  
   
});

//**********Admin panel**********
Route::get('admin',[\App\Http\Controllers\AdminPanel\HomeController::class, 'index'])->name('admin');
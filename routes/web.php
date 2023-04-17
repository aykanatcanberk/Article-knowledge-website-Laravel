<?php

use App\Http\Controllers\AdminPanel\CategoryController;
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

//***Admin category routes
Route::get('/admin/category',[CategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class, 'store'])->name('admin_category_store');   
Route::get('/admin/category/edit/{id}',[CategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[CategoryController::class, 'update'])->name('admin_category_update');  


//Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
//    Route::get('/', 'index')->name('index');
//Route::get('/create', 'create')->name('create');
//    Route::post('/store', 'store')->name('store');
   // Route::get('/edit/{id}', 'edit')->name('edit');
    //Route::post('/update/{id}', 'update')->name('update');
  //  Route::get('/show/{id}', 'show')->name('show');
//    Route::get('/destroy/{id}', 'destroy')->name('destroy');
//});   
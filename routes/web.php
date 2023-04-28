<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\AnnoucementController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\HomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Models\Annoucement;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/announce',[App\Http\Controllers\HomeController::class,'announce'])->name('announce');
Route::get('/content',[App\Http\Controllers\HomeController::class,'content'])->name('content');
Route::get('/contentdetail/{id}',[App\Http\Controllers\HomeController::class,'contentdetail'])->name('contentdetail');
Route::get('/announcedetail/{id}',[App\Http\Controllers\HomeController::class,'announcedetail'])->name('announcedetail');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[App\Http\Controllers\HomeController::class,'storemessage'])->name('storemessage');

//***User messages routes
Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
});


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
Route::prefix('/admin')->name('admin.')->controller(CategoryController::class)->group(function (){ 
Route::get('',[HomeController::class, 'index']);

//***General
Route::get('/setting',[App\Http\Controllers\AdminPanel\HomeController::class, 'setting'])->name('setting');
Route::post('/setting',[App\Http\Controllers\AdminPanel\HomeController::class, 'settingUpdate'])->name('setting.update');
//***Admin category routes
Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });   

  //***Admin Content routes
  Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });  
    //******** Admin Images routes
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{cid}', 'index')->name('index');
        Route::get('/create/{cid}', 'create')->name('create');
        Route::post('/store/{cid}', 'store')->name('store');
        Route::get('/update/{cid}/{id}', 'update')->name('update');
        Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');
    });
     //***Admin messages routes
     Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    }); 

      //***Admin Annoucement routes
  Route::prefix('/annoucement')->name('annoucement.')->controller(AnnoucementController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    }); 
});


<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\__HomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('welcome');
});


//invokable Route
Route::get('/home', HomeController::class);

Route::post('/upload-file', [ImageController::class, 'handleImage'])->name('upload-file');
Route::get('contact', [ContactController::class, 'connect']);
Route::get('about', [AboutController::class, 'info'])->name('about');

//    $about = 'This is an about page here!';
//    $about2 = 'This is a second response!';
//   1-st method <=> return view('about',['about' => $about]);
//    return view ('about',compact('about','about2'));

//Resources
Route::resource('blog', BlogController::class);


//Form handling

Route::get('/login', [LoginController::class,'logIn'])->name('login');

//CSRF TOKEN

Route::post('/login' ,[LoginController::class, 'handleLogin']);
Route::post('save',[LoginController::class,'store'])->name('login.submit');

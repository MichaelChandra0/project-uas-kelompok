<?php

use App\Http\Controllers\AdminLoginRegistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/register',[AuthController::class,'tampilFormRegister'])->name('register');

Route::post('/register',[AuthController::class,'register']);

Route::get('/login',[AuthController::class,'tampilLogin'])->name('login-user');

Route::post('/login',[AuthController::class,'login' ]);

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::resource('/catalog', MenuController::class)->middleware('role:admin,user');

Route::get('/about-us',function(){
    return view('pages.about');
})->name('about-us');

Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');

Route::get('/adminPanel',[MenuController::class, 'adminView'])->middleware('role:admin')->name('adminPanel');

Route::get('/login-admin',[AdminLoginRegistController::class,'tampilFormLogin'])->name('login');

Route::post('/login-admin',[AdminLoginRegistController::class,'login']);

<?php

use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Localization;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

// Untuk Home

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('guest')->group(function(){
    Route::get('change', [LanguageController::class, 'change'])->name('lang.change');
});

// Untuk Article
Route::get('/article', function () {
    return view('/article/index');
});

// untuk studio
Route::get('/admin/studio', function () {
    return view('/admin/studio');
});

Route::get('/admin/studio/video', function () {
    return view('/admin/video');
});

// Untuk Register
Route::get('/admin/register', function () {
    return view('/admin/register');
});

// Untuk login
Route::get('/admin/login', function () {
    return view('/admin/login');
});
 
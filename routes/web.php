<?php

use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Localization;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

// Untuk Home

Route::get('/', function () {
    return view('welcome');
});

// ada
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

// video
Route::get('/admin/studio/video', function () {
    return view('/admin/video');
});

// article
Route::get('/admin/studio/article', function () {
    return view('/admin/article');
});

// Upload Article
Route::get('/admin/studio/article/upload', function () {
    return view('/admin/article_upload');
});

// Untuk Register
Route::get('/admin/register', function () {
    return view('/admin/register');
});

// Untuk login
Route::get('/admin/login', function () {
    return view('/admin/login');
});
 
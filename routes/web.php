<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pagina');
});
Route::get('/contact', function () {
    return view('contact');
});

//News CRUD
Route::resource('news', NewsController::class);
//Menu CRUD
Route::resource('menu', MenuController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

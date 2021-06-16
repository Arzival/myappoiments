<?php

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


Route::get('/users/index','App\Http\Controllers\UserController@index')->name('user.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/icons', function () {
    return view('pages.icons');
})->name('icons');

Route::get('/map', function () {
    return view('pages.maps');
})->name('map');

Route::get('/table', function () {
    return view('pages.tables');
})->name('table');

Route::get('/perfil/editar','App\Http\Controllers\ProfileController@edit')->name('profile.edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

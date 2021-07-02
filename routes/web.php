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

Route::get('/upgrade', function () {
    return view('pages.upgrade');
})->name('upgrade');

Route::get('/perfil/editar','App\Http\Controllers\ProfileController@edit')->name('profile.edit');
Route::post('/perfil/update','App\Http\Controllers\ProfileController@update')->name('profile.update');
Route::post('/perfil/password','App\Http\Controllers\ProfileController@password')->name('profile.password');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','admin'])->group(function () {
    //Routs Specialties
    Route::get('/specialties','App\Http\Controllers\SpecialtyController@index')->name('specialty.index');
    Route::get('/specialties/create','App\Http\Controllers\SpecialtyController@create')->name('specialty.create');
    Route::get('/specialties/{id}/edit','App\Http\Controllers\SpecialtyController@edit')->name('specialty.edit');

    Route::post('/specialties/store','App\Http\Controllers\SpecialtyController@store')->name('specialty.store');
    Route::patch('/specialties/{id}','App\Http\Controllers\SpecialtyController@update')->name('specialty.update');
    Route::delete('/specialties/{specialty}/delete','App\Http\Controllers\SpecialtyController@destroy')->name('specialty.destroy');
    //Doctors
    Route::resource('doctors', 'App\Http\Controllers\DoctorController');
    // Patients
    Route::resource('patients', 'App\Http\Controllers\PatientController');
});

Route::middleware(['auth','doctor'])->group(function () {
    Route::resource('schedule', 'App\Http\Controllers\ScheduleController');
});
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

Route::get('/','WelcomeController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/department', 'DepartmentController@index')->middleware('auth');
Route::get('/department/create', 'DepartmentController@create')->middleware('auth');
Route::post('/department', 'DepartmentController@store')->middleware('auth');
Route::get('/department/{department}', 'DepartmentController@show')->middleware('auth');
Route::get('/department/{department}/edit', 'DepartmentController@edit')->middleware('auth');
Route::put('/department/{department}', 'DepartmentController@update')->middleware('auth');
Route::delete('/department/{department}', 'DepartmentController@destroy')->middleware('auth');

Route::get('/user', 'UserController@index')->middleware('auth');
Route::get('/user/create', 'UserController@create')->middleware('auth');
Route::post('/user', 'UserController@store')->middleware('auth');
Route::get('/user/{user}', 'UserController@show')->middleware('auth');
Route::get('/user/{user}/edit', 'UserController@edit')->middleware('auth');
Route::put('/user/{user}', 'UserController@update')->middleware('auth');

Route::post('/reservation', 'ReservationController@store');
Route::get('/reservation', 'ReservationController@index')->middleware('auth');



Route::get('/doctorreservation', 'DoctorController@index')->middleware('auth');


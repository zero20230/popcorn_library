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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/calificacion', 'GradesController@index')->name('grades');
Route::get('/opinion_usuarios', 'OpUsrController@index')->name('op_usr');
Route::get('/critica', 'CriticController@index')->name('critic');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home_login', 'HomeLoginController@index')->name('home_login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

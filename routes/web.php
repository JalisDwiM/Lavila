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

// Route::get('/', function () {
//     return view('home');
// });

// Auth::routes();
Route::get('/', 'AuthController@getHome')->name('home');

Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'Authcontroller@postRegister')->name('register');
Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin')->name('login');

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthCommand;

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
//Route::get('/', 'AuthController@getHome')->name('home');

Route::get('/register', 'AuthController@getRegister')->name('register');
Route::post('/register', 'Authcontroller@postRegister');
Route::get('/login', 'AuthController@getLogin')->name('login');
Route::post('/login', 'AuthController@postLogin');
// Route::get('/', function () {
//     return view('home');
// });

//route untuk beranda user
Route::get('/berandauser', 'BerandaUserController@berandauser');
Route::get('/antrianuser', 'BerandaUserController@antrianuser');
Route::get('/historiuser', 'BerandaUserController@historiuser');

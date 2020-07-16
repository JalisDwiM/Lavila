<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthCommand;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'Authcontroller@postRegister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/', function () {
    return view('home');
})->middleware('guest');
Route::get('/home', function () {
    return view('user.berandauser');
})->middleware('auth');

//Route untuk beranda admin
Route::get('/admin', 'AdminController@admin');
Route::get('/berandaadmin', 'AdminController@berandaadmin');
Route::get('/grafikantrian', 'AdminController@grafikantrian');
Route::get('/jadwal', 'AdminController@jadwal');


//route untuk beranda user
Route::get('/berandauser', 'UserController@berandauser')->middleware('auth')->name('berandauser');
Route::get('/antrianuser', 'UserController@antrianuser')->middleware('auth');
Route::get('/historiuser', 'UserController@historiuser')->middleware('auth');




Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

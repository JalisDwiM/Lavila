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
    return view('user.beranda');
})->middleware('auth');

//Route untuk beranda admin
Route::get('/admin', 'AdminController@admin')->middleware('auth');
Route::get('/admin/beranda', 'AdminController@berandaadmin')->middleware('auth');
Route::get('/admin/grafikantrian', 'AdminController@grafikantrian')->middleware('auth');
Route::get('/admin/pengunjung', 'AdminController@pengunjung')->middleware('auth');
Route::get('/admin/dokter', 'AdminController@dokter')->middleware('auth');
Route::get('/admin/poli', 'AdminController@poli')->middleware('auth');
Route::get('/admin/jadwal', 'AdminController@jadwal')->middleware('auth');
Route::get('/admin/roles', 'AdminController@roles')->middleware('auth');
Route::get('/admin/review', 'AdminController@review')->middleware('auth');

Route::post('/admin/dokter/store', 'DokterController@store');
Route::get('/admin/dokter/edit/{id}', 'DokterController@edit');
Route::post('/admin/dokter/edit', 'DokterController@update');
Route::get('/admin/dokter/hapus/{id}', 'DokterController@hapus');








//route untuk beranda user
Route::get('/user/beranda', 'UserController@berandauser')->middleware('auth')->name('berandauser');
Route::get('/user/antrian', 'UserController@antrianuser')->middleware('auth');
Route::get('/user/histori', 'UserController@historiuser')->middleware('auth');




Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

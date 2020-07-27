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
    return redirect('/dashboard');
})->middleware('auth');

//Route untuk beranda admin
// Route::get('/admin', 'AdminController@admin')->middleware('auth');
Route::get('/dashboard', 'AdminController@berandaadmin')->middleware('auth')->name('dashboard');
Route::get('/grafikantrian', 'AdminController@grafikantrian')->middleware('auth');
Route::get('/pengunjung', 'AdminController@pengunjung')->middleware('auth');
Route::get('/dokter', 'DokterController@dokter_role')->middleware('auth');
Route::get('/poli', 'AdminController@poli')->middleware('auth');
Route::get('/jadwal', 'AdminController@jadwal')->middleware('auth');
Route::get('/roles', 'AdminController@roles')->middleware('auth');
Route::get('/review', 'AdminController@review')->middleware('auth');
Route::get('/admin/register', 'AdminController@register')->middleware('auth');
Route::post('/admin/register', 'AdminController@postregister')->middleware('auth');


Route::post('/dokter/store', 'DokterController@store');
Route::get('/dokter/edit/{id}', 'DokterController@edit');
Route::post('/dokter/{id}/update', 'DokterController@update');
Route::get('/dokter/hapus/{id}', 'DokterController@hapus');

Route::post('/jadwal/store', 'ScheduleController@store');








//route untuk beranda user
Route::get('/beranda', 'UserController@berandauser')->middleware('auth');
Route::get('/antrian', 'UserController@antrianuser')->middleware('auth');
Route::get('/histori', 'UserController@historiuser')->middleware('auth');




Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

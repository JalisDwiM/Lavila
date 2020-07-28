<?php

use App\Http\Controllers\AdminController;
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

Route::group(['middleware' => 'auth'], function () {
    //Route untuk beranda admin
    // Route::get('/admin', 'AdminController@admin')->middleware('auth');
    Route::get('/dashboard', 'AdminController@berandaadmin')->name('dashboard');
    Route::get('/grafikantrian', 'AdminController@grafikantrian');
    Route::get('/pengunjung', 'AdminController@pengunjung');
    Route::get('/dokter', 'DokterController@dokter_role');
    Route::get('/poli', 'AdminController@poli');
    Route::get('/jadwal', 'AdminController@jadwal');
    Route::get('/roles', 'AdminController@roles');
    Route::get('/review', 'AdminController@review');
    Route::get('/admin/register', 'AdminController@register');
    Route::post('/admin/register', 'AdminController@postregister');
    Route::post('/tambahpoli', 'DepartmentController@store');
});


Route::post('/dokter/store', 'DokterController@store');
Route::get('/dokter/edit/{id}', 'DokterController@edit');
Route::post('/dokter/{id}/update', 'DokterController@update');
Route::get('/dokter/hapus/{id}', 'DokterController@hapus');

Route::post('/jadwal/store', 'ScheduleController@store');







Route::group(['middleware' => 'auth'], function () {
    Route::get('/beranda', 'UserController@berandauser');
    Route::get('/antrian', 'UserController@antrianuser');
    Route::get('/histori', 'UserController@historiuser');
    Route::get('/pesan', 'UserController@pesanuser');


    Route::get('/logout', 'AuthController@logout')->name('logout');
});
//route untuk beranda user

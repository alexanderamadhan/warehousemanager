<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/tambahBarang2', 'AdminController@tambahBarang');
Route::get('/home', 'AdminController@index');
Route::post('/home', 'AdminController@storeBarang');
Route::get('/jual_barang', 'AdminController@jualbarang');

// Route::get('/home', 'AdminController@index');
// Route::post('admin', 'AdminController@store');

Route::prefix('superadmin')->group(function() {
Route::get('/home2', 'SuperadminController@home2')->name('home2');

Route::get('/tampilBarang', 'SuperadminController@tampilBarang')->name('superadmin.dashboard');
Route::get('/tampilAkun', 'SuperadminController@tampilAkun');
Route::delete('/tampilBarang/{id}', 'SuperadminController@hapusBarang');
Route::delete('/tampilAkun/{id}', 'SuperadminController@hapusAkun');
Route::get('/editBarang/{id}/edit', 'SuperadminController@editBarang');
Route::get('/editAkun/{id}/edit', 'SuperadminController@editAkun');
Route::put('/editBarang/{id}', 'SuperadminController@updateBarang');
Route::put('/editAkun/{id}', 'SuperadminController@updateAkun');
Route::get('/tambahAkun', 'SuperadminController@tambahAkun');
Route::post('/tampilAkun', 'Auth\SuperadminLoginController@storeAkun');
Route::get('/login','Auth\SuperadminLoginController@showLoginForm')->name('superadmin.login');
Route::post('/login', 'Auth\SuperadminLoginController@login')->name('superadmin.login.submit');
Route::get('/logout', 'Auth\SuperadminLoginController@logout')->name('superadmin.logout');

});

Route::prefix('executive')->group(function() {
Route::get('/home', 'ExecutiveController@index')->name('executive.dashboard');
Route::get('/tampilBarang', 'ExecutiveController@tampilBarang');
Route::get('/tampilAkun', 'ExecutiveController@tampilAkun');
Route::get('/login','Auth\ExecutiveLoginController@showLoginForm')->name('executive.login');
Route::post('/login', 'Auth\ExecutiveLoginController@login')->name('executive.login.submit');
Route::get('/logout', 'Auth\ExecutiveLoginController@logout')->name('executive.logout'); 
Route::get('/keuangan', 'ExecutiveController@tampilKeuangan');
});

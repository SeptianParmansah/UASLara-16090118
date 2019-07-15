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
    return view('templates.front_end._main');
});
Route::get('/dashboard',function() {
    return view('admin.dashboard');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/kegiatan', 'KegiatanController@index');
Route::post('/kegiatan/create', 'KegiatanController@create');
Route::get('/kegiatan/{id}/edit', 'KegiatanController@edit');
Route::post('/kegiatan/{id}/update', 'KegiatanController@update');
Route::get('/kegiatan/{id}/delete', 'KegiatanController@delete');

Route::get('/penghargaan', 'PenghargaanController@index');
Route::post('/penghargaan/create', 'PenghargaanController@create');
Route::get('/penghargaan/{id}/edit', 'PenghargaanController@edit');
Route::post('/penghargaan/{id}/update', 'PenghargaanController@update');
Route::get('/penghargaan/{id}/delete', 'PenghargaanController@delete');
// Route::get('/penghargaan/{id}/profile', 'PenghargaanController@profile');


Route::group(['middleware' => ['auth', 'CheckLevel:admin']],function(){
    Route::get('/anggota', 'AnggotaController@index');
    Route::post('/anggota/create', 'AnggotaController@create');
    Route::get('/anggota/{id}/edit', 'AnggotaController@edit');
    Route::post('/anggota/{id}/update', 'AnggotaController@update');
    Route::get('/anggota/{id}/delete', 'AnggotaController@delete');
    Route::get('/anggota/{id}/profile', 'AnggotaController@profile');
});

Route::group(['middleware' => ['auth', 'CheckLevel:admin']],function(){

});

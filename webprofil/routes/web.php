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


Auth::routes();

Route::group(['prefix' => '/admin'], function (){

    Route::get('/','DashboardController@index')->name('dashboard');

    Route::get('sejarah', 'SejarahController@index')->name('sejarah');
    Route::get('sejarah/create', 'SejarahController@create')->name('sejarah.create');
    Route::post('sejarah/create', 'SejarahController@store')->name('sejarah.store');
    Route::get('sejarah/edit/{id}', 'SejarahController@edit')->name('sejarah.edit');
    Route::patch('sejarah/edit/{id}', 'SejarahController@update')->name('sejarah.update');
    Route::get('sejarah/destroy/{id}', 'SejarahController@destroy')->name('sejarah.destroy');

    Route::get('galeri', 'GaleriController@index')->name('galeri');
    Route::get('galeri/create', 'GaleriController@create')->name('galeri.create');
    Route::post('galeri/create', 'GaleriController@store')->name('galeri.store');
    Route::get('galeri/edit/{id}', 'GaleriController@edit')->name('galeri.edit');
    Route::patch('galeri/edit/{id}', 'GaleriController@update')->name('galeri.update');
    Route::get('galeri/destroy/{id}', 'GaleriController@destroy')->name('galeri.destroy');


    Route::get('makanan', 'MakananController@index')->name('makanan');
    Route::get('makanan/create', 'MakananController@create')->name('makanan.create');
    Route::post('makanan/create', 'MakananController@store')->name('makanan.store');
    Route::get('makanan/edit/{id}', 'MakananController@edit')->name('makanan.edit');
    Route::patch('makanan/edit/{id}', 'MakananController@update')->name('makanan.update');
    Route::get('makanan/destroy/{id}', 'MakananController@destroy')->name('makanan.destroy');

    Route::get('wisata', 'WisataController@index')->name('wisata');
    Route::get('wisata/create', 'WisataController@create')->name('wisata.create');
    Route::post('wisata/create', 'WisataController@store')->name('wisata.store');
    Route::get('wisata/edit/{id}', 'WisataController@edit')->name('wisata.edit');
    Route::patch('wisata/edit/{id}', 'WisataController@update')->name('wisata.update');
    Route::get('wisata/destroy/{id}', 'WisataController@destroy')->name('wisata.destroy');

});


Route::get('/', 'FrontEndController@userhome')->name('user.home');



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


Route::get('/', 'HomeController@index')->name('home');

Route::get('imoveis', 'ImmobileController@index');

Route::get('imoveis/novo', 'ImmobileController@new');

Route::get('imoveis/{immobile}/editar', 'ImmobileController@edit')->name('immobile.edit');

Route::delete('imoveis/{immobile}', 'ImmobileController@delete')->name('immobile.delete');

Route::post('imoveis/salvar', 'ImmobileController@save');

Route::patch('imoveis/{immobile}', 'ImmobileController@update')->name('immobile.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




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

//Route::view('/', 'welcome');

Route::get('/', 'HomeController@index')->name('home');
Route::get('View/{Agenda}', 'HomeController@viewPerson')->name('view.person');

Route::post('/Person/store', 'AgendaController@store')->name('person.store');
Route::post('/Person/update/{Agenda}', 'AgendaController@update')->name('person.update');
Route::get('/Person/delete/{Agenda}', 'AgendaController@delete')->name('person.delete');

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

use App\User;

Route::view('/login', 'login');
Route::post('/login', 'HomeController@login')->name('login');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'Person'], function () {
        Route::post('/store', 'PersonController@store')->name('person.store');
        Route::get('/show/{Person}', 'PersonController@view')->name('person.view');
        Route::post('/update/{Person}', 'PersonController@update')->name('person.update');
        Route::get('/delete/{Person}', 'PersonController@delete')->name('person.delete');
    });
});


Route::get('test', function(){
    // $user = new User();
    // $user->name = 'nombre';
    // $user->email = 'nombre@nombre.com';
    // $user->password = bcrypt('123456');
    // $user->save();

    // $user = User::find(1);
    // return $user->load('agenda.people');
});

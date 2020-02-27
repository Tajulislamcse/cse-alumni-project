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


Route::prefix('admin')->group(function()
{
	Route::get('/alumni/getAlumniJson', 'Admin\AlumniController@getAlumniJson');
    Route::resource('/alumni','Admin\AlumniController');

});




Route::get('/home', 'HomeController@index')->name('home');

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
	Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
    Route::resource('/alumnis','Admin\AlumniController');

    Route::get('/teachers/getTeachersJson','Admin\TeacherController@getTeachersJson');
    Route::resource('/teachers','Admin\TeacherController');


});




Route::get('/home', 'HomeController@index')->name('home');

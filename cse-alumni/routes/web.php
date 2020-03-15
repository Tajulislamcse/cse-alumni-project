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



Route::resource('/job','Alumni\JobController');
//Route::get('/job/edit','Alumni\JobController@edit');
//Route::post('/job/update','Alumni\JobController@update');
Auth::routes();
Route::prefix('admin')->group(function()
{

	Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
    Route::resource('/alumnis','Admin\AlumniController');
	
   
});




Route::get('/', 'FrontEnd\HomeController@show');


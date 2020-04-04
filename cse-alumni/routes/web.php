<?php








Auth::routes(); // Authentication routes
Route::get('/home','HomeController@index');

 
Route::get('/admin', 'AdminController@index');

Route::get('/alumni', 'AlumniController@index');
   
//Admin's routes ends from here

Route::prefix('alumni')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
    Route::resource('/alumnis','Alumni\AlumniController');
	
   



    Route::get('/{batchNo}','Alumni\BatchController@index');
    Route::resource('/job','Alumni\JobController');
   
	

	
   
}); //Alumni's routes ends from here






Route::view('/', 'welcome');


<?php








Auth::routes(); // Authentication routes
Route::get('/home','HomeController@index');


Route::prefix('admin')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
	Route::get('/dashboard', 'Admin\DashboardController@index');
});
 
Route::get('/admin', 'AdminController@index');

//Admin's routes ends from here

Route::prefix('alumni')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
	Route::get('/dashboard', 'Alumni\DashboardController@index');
   

    Route::resource('/alumnis','Alumni\AlumniController');
	
   



    Route::get('/{batchNo}','Alumni\BatchController@index');
    Route::resource('/job','Alumni\JobController');
   
	

	
   
}); //Alumni's routes ends from here






Route::view('/', 'welcome');


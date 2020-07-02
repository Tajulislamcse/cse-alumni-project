<?php








Auth::routes(); // Authentication routes
Route::get('/home','HomeController@index');


Route::prefix('admin')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
	Route::get('/dashboard', 'Admin\DashboardController@index');
	Route::resource('/post', 'Admin\PostController');
});
 
//Route::get('/admin', 'AdminController@index');

//Admin's routes ends from here

Route::prefix('alumni')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
	//Route::get('/dashboard', 'Alumni\DashboardController@index');
	Route::resource('/committee','Alumni\CommitteeMemberController');
	Route::get('/test','Alumni\CommitteeController@index');

   

    Route::resource('/alumnis','Alumni\AlumniController');
	
   



    Route::get('/{batchNo}','Alumni\BatchController@index');
    Route::resource('/job','Alumni\JobController');
   
	

	
   
}); //Alumni's routes ends from here






Route::get('/','PostShowController@index');
Route::get('/postdetails/{id}','PostShowController@details');



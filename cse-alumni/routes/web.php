<?php









Auth::routes(); // Authentication routes


Route::prefix('admin')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
	Route::resource('/registeruser','Admin\RegisteredUserController');
	Route::get('/dashboard', 'Admin\DashboardController@index');
	Route::resource('/post', 'Admin\PostController');
	Route::resource('/slider','Admin\SliderImgController');
});
 
//Route::get('/admin', 'AdminController@index');

//Admin's routes ends from here

Route::prefix('alumni')->group(function()
{

	//Route::get('/alumnis/getAlumnisJson','Admin\AlumniController@getAlumnisJson');
	//Route::get('/dashboard', 'Alumni\DashboardController@index');
	Route::get('markAllAsRead',function()
    {
      auth()->user()->unreadNotifications->markAsRead();
      //return redirect()->back();
    });
 


	Route::resource('/committee','Alumni\CommitteeMemberController');
	Route::get('/test','Alumni\CommitteeController@index');

   

    Route::resource('/alumnis','Alumni\AlumniController');
	
   



    Route::get('/{batchNo}','Alumni\BatchController@index');
    Route::resource('/job','Alumni\JobController');
   
	

	
   
}); //Alumni's routes ends from here




//Route::view('/','frontPage');

Route::get('/','HomeController@index');
Route::get('/postdetails/{id}','PostShowController@details');



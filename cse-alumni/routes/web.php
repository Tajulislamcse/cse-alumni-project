<?php
Auth::routes(); // Authentication routes
//Admin routes
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','auth.admin']],function()
{
	Route::get('/dashboard', 'DashboardController@index');
	Route::resources([
		'category' => 'PostCategoryController',
		'post' => 'PostController',
		'slider'=>'SliderImageController',
	]);
});
//general member's routes
Route::group(['prefix'=>'user','namespace'=>'GeneralMember'],function()
{
	Route::get('markAllAsRead',function()
	{
		auth()->user()->unreadNotifications->markAsRead();
	});
	Route::resource('profile','UserController');
	Route::get('profiles/{batch}','ProfileController@show');
	Route::post('profession/update/{id}','ProfileController@updateProfession');
	Route::post('image/update/{id}','ProfileController@updateImage');
	Route::get('{id}/basic/info/edit','ProfileController@edit');
});
//committee member's routes 
Route::group(['prefix'=>'committee','namespace'=>'CommitteeMember'],function()
{
	Route::resource('/member','ProfileController');
});
Route::get('/','HomeController@index');
Route::get('/postdetails/{id}','PostShowController@details');

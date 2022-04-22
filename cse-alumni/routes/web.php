<?php
Auth::routes(); // Authentication routes
//Admin routes
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','auth.admin']],function()
{
	Route::get('/dashboard', 'DashboardController@index');
	Route::resources([
		'category' => 'PostCategoryController',
		'post' => 'PostController',
		'slider' => 'SliderImageController',
		'batch' => 'BatchController'
	]);
});
Route::resource('/admin/registeruser','Admin\RegisteredUserController');

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

// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
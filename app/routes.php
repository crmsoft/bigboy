<?php

/*____POST & GET & PUT & DELETE == CRUD_____*/

use Illuminate\Support\Facades\Route;

Route::get('/', array(
	'as' => 'get-index',
	'uses' => 'HomeController@showWelcome'
));

/**
 * Authenticated group
 */
Route::group(array( 'before'=>'auth' ),function(){

	Route::get('/cms/dashboard',array(
		'as'=>'view-cms-dashboard',
		'uses' => 'PageController@getDashboard'
	));

	/// REST CORE
	Route::post('/rest/post/forms/',array(
		'as' => 'post-json-file',
		'uses' => 'RestController@postJsonFile'
	));
	Route::post('/rest/post/table/',array(
		'as' => 'post-json-table-fields',
		'uses' => 'RestController@postJsonTable'
	));
	/// END REST CORE

});
/**
 * Unauthenticated group !
 */
Route::group( array( 'before'=>'guest' ), function(){
	/**
	 * log in to the dashboard
	 */
	Route::get('/cms/login', array(
		'as' => 'cms-login-page',
		'uses' => 'AuthenticationController@getLoginPage'
	));
	/**
	 * logout from dashboard
	 */
	Route::get('/cms/logout', array(
		'as' => 'cms-logout-action',
		'uses' => 'AuthenticationController@getLogOut'
	));
	/**
	 * check for the FORM::TOKEN() == SESSION::TOKEN before any route that in the group !
	 * a bit more secure ?
	 */
	Route::group( array('before'=>'csrf'), function(){

		Route::post('/cms/post-sign-in', array(
			'as' => 'post-sign-in',
			'uses' => 'AuthenticationController@postSignIn'
		));

	});

});
<?php

/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
*/

Route::get('test/full_name', function(){
	dd(User::find(1)->full_name);
});

Route::get('test/add_user_fail', function(){
	$user = new User;
	$user->user_role = "administrator";
	$user->password = "password";

	dd($user->save());
});

Route::post('test/show', array('as'=>'test_show_post', function(){
	echo "test post display";
}));


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));

Route::controller('user', 'UsersController');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', [
	'as' => 'index',
	'uses' => 'AllofhomeController@index'
]);

Route::get('login', [
	'as' => 'login',
	'uses' => 'AllofhomeController@login'
]);

Route::get('signup', [
	'as' => 'signup',
	'uses' => 'AllofhomeController@signup'
]);

Route::get('aboutus', [
	'as' => 'aboutus_basic',
	'uses' => 'AllofhomeController@about'
]);

Route::get('aboutusex', [
	'as' => 'aboutus_extend',
	'uses' => 'AllofhomeController@about_ex'
]);

Route::get('aboutusme', [
	'as' => 'aboutus_me',
	'uses' => 'AllofhomeController@about_me'
]);

Route::get('teamlist', [
	'as' => 'teamlist',
	'uses' => 'AllofhomeController@teamlist'
]);

Route::get('teamgrid', [
	'as' => 'teamgrid',
	'uses' => 'AllofhomeController@teamgrid'
]);

Route::get('teammemb', [
	'as' => 'teammemb',
	'uses' => 'AllofhomeController@teammemb'
]);

Route::get('contactus', [
	'as' => 'contact',
	'uses' => 'AllofhomeController@contact'
]);

Route::get('pricing', [
	'as' => 'pricing',
	'uses' => 'AllofhomeController@pricing'
]);

Route::get('pricing_table', [
	'as' => 'pricing_table',
	'uses' => 'AllofhomeController@pricing_table'
]);

Route::get('timeline', [
	'as' => 'timeline',
	'uses' => 'AllofhomeController@timeline'
]);

Route::get('timelineleft', [
	'as' => 'timelineleft',
	'uses' => 'AllofhomeController@timelineleft'
]);

Route::get('timelineright', [
	'as' => 'timelineright',
	'uses' => 'AllofhomeController@timelineright'
]);

Route::get('timelinestacked', [
	'as' => 'timelinestacked',
	'uses' => 'AllofhomeController@timelinestacked'
]);

Route::get('custumers', [
	'as' => 'custumers',
	'uses' => 'AllofhomeController@custumers'
]);

Route::get('features', [
	'as' => 'features',
	'uses' => 'AllofhomeController@features'
]);

Route::get('starter', [
	'as' => 'starter',
	'uses' => 'AllofhomeController@starter'
]);

Route::get('index-boxed', [
	'as' => 'index_boxed',
	'uses' => 'AllofhomeController@index_boxed'
]);

Route::get('blog', [
	'as' => 'blog',
	'uses' => 'AllofhomeController@blog'
]);

Route::get('blogleft', [
	'as' => 'blogleft',
	'uses' => 'AllofhomeController@blogleft'
]);

Route::get('blogtimeline', [
	'as' => 'blogtimeline',
	'uses' => 'AllofhomeController@blogtimeline'
]);

Route::get('bloggrid', [
	'as' => 'bloggrid',
	'uses' => 'AllofhomeController@bloggrid'
]);

Route::get('blogpost', [
	'as' => 'blogpost',
	'uses' => 'AllofhomeController@blogpost'
]);

Route::get('blogvdo', [
	'as' => 'blogvdo',
	'uses' => 'AllofhomeController@blogvdo'
]);

Route::get('blogpostslide', [
	'as' => 'blogpostslide',
	'uses' => 'AllofhomeController@blogpostslide'
]);

Route::get('blogpostaudio', [
	'as' => 'blogpostaudio',
	'uses' => 'AllofhomeController@blogpostaudio'
]);

Route::get('sliderdefault', [
	'as' => 'sliderdefault',
	'uses' => 'AllofhomeController@sliderdefault'
]);


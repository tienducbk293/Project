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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',[
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);

Route::get('/single',[
	'as'=>'single',
	'uses'=>'PageController@getSingle'
]);

Route::get('/category',[
	'as'=>'category',
	'uses'=>'PageController@getCategory'
]);

Route::get('/search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);

Route::get('/archive',[
	'as'=>'archive',
	'uses'=>'PageController@getArchive'
]);

Route::get('/generic',[
	'as'=>'generic',
	'uses'=>'PageController@getGeneric'
]);

Route::get('/elements',[
	'as'=>'elements',
	'uses'=>'PageController@getElements'
]);

?>
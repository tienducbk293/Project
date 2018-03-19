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

Route::get('/search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);

?>
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
use App\NongDodata;

Route::get('/', [
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);


Route::group(['prefix' => 'admin', 'middleware' => 'Adminmiddleware'],function(){
	Route::group(['prefix'=>'pages'],function(){
		Route::get('survey',['as'=>'admin.pages.survey','uses'=>'PageController@survey']);
		Route::get('tables',['as'=>'admin.pages.tables','uses'=>'PageController@table']);
		Route::get('form',['as'=>'admin.pages.form','uses'=>'PageController@form']);
		Route::get('calendar',['as'=>'admin.pages.calendar','uses'=>'PageController@calendar']);
	});
	Route::group(['prefix'=>'users'],function(){
		Route::get('add',['as'=>'admin.users.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.users.postAdd','uses'=>'UserController@postAdd']);
		Route::get('list',['as'=>'admin.users.getList','uses'=>'UserController@getList']);
		Route::get('edit/{id}',['as'=>'admin.users.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.users.postEdit','uses'=>'UserController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.users.getDelete','uses'=>'UserController@getDelete']);
		Route::get('detail/{id}',['as'=>'admin.users.getDetail','uses'=>'UserController@getDetail']);
	});
});

Route::get('/homepage',[
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);

Route::get('/homepage/chart',[
	'as'=>'chart',
	'uses'=>'PageController@getChart'
]);

Route::get('/search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);

Route::get('gmaps', 'PageController@gmaps');

Route::get('/homepage/aqi','PageController@chart');

Route::get('test',[
	'as'=>'test',
	'uses'=>'PageController@getTest'
]);
Route::get('aqi/chart',[
	'as'=>'chart',
	'uses'=>'AQIController@chart'
]);

Route::get('login',[
	'as' => 'login',
	'uses' => 'PageController@getLogin'
]);

Route::get('signup',[
	'as' => 'signup',
	'uses' => 'PageController@getSignup'
]);

Route::post('signup',[
	'as' => 'signup',
	'uses' => 'PageController@postSignup'
]);

Route::post('login',[
	'as' => 'login',
	'uses' => 'PageController@postLogin'
]);

Route::get('log-out',[
	'as'=>'logout',
	'uses'=>'PageController@getLogout'
]);
?>
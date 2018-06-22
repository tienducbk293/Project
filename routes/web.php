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

Route::get('/', function () {
	if (($handle = fopen ( public_path () . '/NongDotrack.csv', 'r' )) !== FALSE) {
		while ( ($data = fgetcsv ( $handle, 2000, ',' )) !== FALSE ) {
			$nongdo = new NongDodata ();
			$nongdo->id_track = $data [0];
			$nongdo->time = $data [1];
			$nongdo->NO2 = $data [2];
			$nongdo->CO = $data [3];
			$nongdo->PM2_5 = $data [4];
			$nongdo->PM10 = $data [5];
			$nongdo->SO2 = $data [6];
			$nongdo->O3 = $data [7];
			$nongdo->save ();
		}
		fclose ( $handle );
	}
	
	$finalData = $nongdo::all ();
	
	return view ( 'welcome' )->withData ( $finalData );
});


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
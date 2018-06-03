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

Route::get('aqi',[
	'as'=>'aqi',
	'uses'=>'AQIController@index'
]);
Route::get('aqi/chart',[
	'as'=>'chart',
	'uses'=>'AQIController@chart'
]);
?>
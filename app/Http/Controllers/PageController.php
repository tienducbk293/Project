<?php

namespace App\Http\Controllers;
use Session;
use Mapper;
use Charts;

use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	Mapper::map(21.005618, 105.843347);
    	$chart1 = Charts::create('bar', 'highcharts')
  			->title('Top chart')
  			->elementLabel('Top label')
  			->labels(['First', 'Second', 'Third'])
  			->values([5,10,20])
  			->colors(['#2196F3', '#FFC107', '#F44336'])
  			->dimensions(440,250)
  			->responsive(false);

  		$chart2 = Charts::create('bar', 'highcharts')
  			->title('Center chart')
  			->elementLabel('Center label')
  			->labels(['First', 'Second', 'Third'])
  			->values([10,5,20])
  			->colors(['#F44336', '#FFC107', '#2196F3'])
  			->dimensions(440,250)
  			->responsive(false);

      $chart3 = Charts::create('bar', 'highcharts')
        ->title('Bottom chart')
        ->elementLabel('Bottom label')
        ->labels(['First', 'Second', 'Third'])
        ->values([10,20,5])
        ->colors(['#FFC107', '#F44336', '#2196F3'])
        ->dimensions(440,250)
        ->responsive(false);
    	return view('page.homepage', ['chart1' => $chart1, 'chart2' => $chart2, 'chart3' => $chart3]);
    }

    public function getSearch(){
    	return view('page.search');
    }
}

?>
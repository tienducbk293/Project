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
    	$chart = Charts::create('bar', 'highcharts')
  			->title('My nice chart')
  			->elementLabel('My nice label')
  			->labels(['First', 'Second', 'Third'])
  			->values([5,10,20])
  			->dimensions(1000,500)
  			->responsive(false);
    	return view('page.homepage', ['chart' => $chart]);
    }

    public function getSearch(){
    	return view('page.search');
    }
}

?>
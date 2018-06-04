<?php

namespace App\Http\Controllers;

use App\AQIdata;
use DB;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
    	$items = AQIdata::where('id_track',1)->take(5)->get()->toArray();
    	return view('master', compact('aqi_tracks', $items)); 
    }
}

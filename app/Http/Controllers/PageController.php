<?php

namespace App\Http\Controllers;
use Session;
use Mapper;
use Charts;
use App\AQIdata;
use App\Location;
use DB;

use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function getIndex(){
    $locations = Location::all(['id', 'locate']);
    return view('page.homepage', compact('locations'));
  }

  public function getTest() {
    $items = AQIdata::where('id_track',1)->take(5)->get();
    print_r($items);
    return view('page.test', compact('aqi_tracks'));
  }

  public function getSearch(){
    return view('page.search');
  }

  public function getLogin(){
    return view('page.login');
  }

  public function getSignup(){
    return view('page.signup');
  }

  public function gmaps(){
    $locations = DB::table('locations')->get();
    return view('gmaps', compact('locations'));
  }

  public function chart()
      {
        $result = DB::table('aqi_tracks')
                    ->where('id_tracks','=','1')
                    ->orderBy('id', 'ASC')
                    ->get();
        return response()->json($result);
      }
}

?>
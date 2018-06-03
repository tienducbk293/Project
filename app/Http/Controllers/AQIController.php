<?php

namespace App\Http\Controllers;

use App\AQIdata;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AQIController extends Controller
{
  public function index()
    {
        return view('page.homepage');
    }

  public function chart()
      {
        $result = DB::table('aqi_tracks')
                    ->where('id_track','=','2')
                    ->orderBy('id', 'ASC')->take(5)
                    ->get();
        return response()->json($result);
      }
}

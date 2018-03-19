<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.homepage');
    }

    public function getSearch(){
    	return view('page.search');
    }
}

?>
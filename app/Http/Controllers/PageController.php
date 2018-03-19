<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.homepage');
    }

    public function getSingle(){
    	return view('page.single');
    }

    public function getCategory(){
    	return view('page.category');
    }

    public function getSearch(){
    	return view('page.search');
    }

    public function getArchive(){
    	return view('page.archive');
    }

    public function getGeneric(){
    	return view('page.generic');
    }

    public function getElements(){
    	return view('page.elements');
    }
}

?>
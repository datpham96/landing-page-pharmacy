<?php

namespace App\Http\Controllers\Frontend\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeCtrl extends Controller
{

    public function __construct(){
    }

    public function getHome(){
    	return view('frontend.home.home');
    }
}

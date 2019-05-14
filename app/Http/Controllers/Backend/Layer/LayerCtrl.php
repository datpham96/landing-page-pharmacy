<?php

namespace App\Http\Controllers\Backend\Layer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayerCtrl extends Controller
{
    public function layerOne() {
        return view('backend.layer.layerOne');
    }

    public function layerTwo() {
        return view('backend.layer.layerTwo');
    }

    public function layerThree() {
        return view('backend.layer.layerThree');
    }

    public function layerFour() {
        return view('backend.layer.layerFour');
    }

    public function layerFive() {
        return view('backend.layer.layerFive');
    }

     public function layerSix() {
        return view('backend.layer.layerSix');
    }
}

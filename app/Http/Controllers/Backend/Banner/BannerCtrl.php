<?php

namespace App\Http\Controllers\Backend\Banner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerCtrl extends Controller
{
    public function banner() {
        return view('backend.banner.banner');
    }
}

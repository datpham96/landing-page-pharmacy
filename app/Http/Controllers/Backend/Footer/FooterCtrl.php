<?php

namespace App\Http\Controllers\Backend\Footer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterCtrl extends Controller
{
    public function footer() {
        return view('backend.footer.footer');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function acessarHome()
    {
        return view('site.home');
    }
}

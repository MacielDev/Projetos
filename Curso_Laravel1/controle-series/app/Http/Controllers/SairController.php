<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SairController extends Controller
{
    public function sair()
    {
        Auth::logout();
        return redirect()->route('entrar');
    }
}

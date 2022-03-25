<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrarController extends Controller
{
    public function index()
    {
        return view('entrar.index');
    }
    public function entrar(Request $request)
    {
        return view('listar_series');
    }
}

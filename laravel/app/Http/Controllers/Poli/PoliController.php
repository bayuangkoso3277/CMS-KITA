<?php

namespace App\Http\Controllers\Poli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    // 
    public function index()
    {
        return view('poli.index');
    }
    public function view()
    {
        return view('poli.antri'); 
    }

}

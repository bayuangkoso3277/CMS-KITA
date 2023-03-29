<?php

namespace App\Http\Controllers\Poli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    // 
    public function index()
    {
        return view('poli.cek.index');
    }
    public function view()
    {
        return view('poli.view'); 
    }

}

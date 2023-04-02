<?php

namespace App\Http\Controllers\RekamMedis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    //
    public function index(){
        return view('rekammedis.index');
    }
    public function cari(){
        return view('rekammedis.cari');
    }
    public function input(){
        return view('rekammedis.input');
    }
     public function detail(){
        return view('rekammedis.detail');
    }
}

<?php

namespace App\Http\Controllers\Antrian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AntrianModel;

class AntrianController extends Controller
{

    public function index()
    {
        return view('antrian.index');
    }
    public function getAntrian(){

    }
}

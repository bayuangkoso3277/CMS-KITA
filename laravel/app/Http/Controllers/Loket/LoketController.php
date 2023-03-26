<?php

namespace App\Http\Controllers\Loket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoketController extends Controller
{
    //
    public function index()
    {
        return view('loket.index');
    }
    public function pasien_lama()
    {
        return view('loket.pasien_lama.index');
    }
    public function pasien_baru()
    {
        return view('loket.pasien_baru.index');
    }

}

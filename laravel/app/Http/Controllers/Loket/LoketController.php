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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangDesaController extends Controller
{
    public function tentangdesa(){
        return view('desa/tentangdesa');
    }
}

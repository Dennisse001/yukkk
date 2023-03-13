<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaDesaController extends Controller
{
    public function saranaumum(){
        return view('desa/saranaumum');
    }
}

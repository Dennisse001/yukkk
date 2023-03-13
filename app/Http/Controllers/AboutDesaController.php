<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutDesaController extends Controller
{

    public function about(){
        return view('website/about');
    }

}


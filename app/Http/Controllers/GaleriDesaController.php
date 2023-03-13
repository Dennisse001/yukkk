<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriDesaController extends Controller
{
public function galeridesa()
{
    return view('desa.galeri');
}
public function galeridesa2()
{
    return view('desa.galeridesa2');
}
}

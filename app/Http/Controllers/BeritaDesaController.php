<?php

namespace App\Http\Controllers;

use App\Models\desa_new;
use Illuminate\Http\Request;

class BeritaDesaController extends Controller
{
    public function beritadesa(){
        return view('desa/beritadesa');
}

public function show($id,$id_user)
{
    $berita = desa_new::find($id)->where('user_id', $id_user)->get();
    return view('detail', compact('berita'));
}
}

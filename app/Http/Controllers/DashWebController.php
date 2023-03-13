<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\desa_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashWebController extends Controller
{

    public function dashboardwebsite()
    {
        $diti = User::where('status', 'aktif')->get()    ;
        //$last_desa = User::latest()->first(); // mengambil data terakhir dari tabel User
        //$diti->push($last_desa); // menambahkan data terakhir ke dalam array $beritas
        $berita = desa_new::all();
        return view('website.dashweb', ['diti'=>$diti,'news'=>$berita]);
    }




    public function dashweb(Request $request)
    {   
        $diti = User::where('status', 'aktif')->where('role', 'admindesa')->get();
        $searchTerm = $request->id;

        $products = User::find($searchTerm);
        return view('desa.dashdesa', ['data' => $products, 'searchTerm' => $searchTerm,'diti'=>$diti]);
    }




}

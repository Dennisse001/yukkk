<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashAdminController extends Controller
{

    
    public function dashadmin()
    {
        $jumlah_pending = User::where('status', 'pending')->count();
        $jumlah_data = User::where('status', 'aktif')->count();
       
        return view ('webadmin.dashboard') ->with('jumlah_data', $jumlah_data) -> with ('jumlah_pending', $jumlah_pending);
    }
}
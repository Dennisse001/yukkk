<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboardadmindesa ');
        }else{
            return view('login');
        }
    }



    public function store(Request $request)
    {
        

 
        $credentials = $request->only('email', 'password');
        $credentials['status'] = 'aktif';
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboardadmindesa');
        }

        return back()->withErrors(['email' => 'Email atau password salah atau akun tidak aktif.',
        ]);

    }

    
   

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/masuk');
    }
}
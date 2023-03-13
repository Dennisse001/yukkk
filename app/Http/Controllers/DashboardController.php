<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\desa_new;
use App\Models\resident;
use App\Models\desa_rule;
use App\Models\kt_structure;
use Illuminate\Http\Request;
use App\Models\pkk_structure;
use App\Models\public_facility;
use App\Models\lembaga_structure;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
        public function dashboard()
    {
        $jumlah_pkk = pkk_structure::where('user_id',Auth::user()->id)->count();
        $jumlah_struktur = lembaga_structure::where('user_id',Auth::user()->id)->count();
        $jumlah_kt = kt_structure::where('user_id',Auth::user()->id)->count();
        $jumlah_peraturan = desa_rule::where('user_id',Auth::user()->id)->count();
        $jumlah_berita = desa_new::where('user_id',Auth::user()->id)->count();
        $jumlah_product = Product::where('user_id',Auth::user()->id)->count();
        $jumlah_penduduk = resident::where('user_id',Auth::user()->id)->count();
        $jumlah_sarana = public_facility::where('user_id',Auth::user()->id)->count();
        
        //grafik jenis kelamin
        $jk = resident::where('user_id',Auth::user()->id)->count();
        $perempuan = resident::where('jk', 'Perempuan')->where('user_id',Auth::user()->id)->count();
        $laki = resident::where('jk', 'Laki-Laki')->where('user_id',Auth::user()->id)->count();

        //grafik agama
        $agama = resident::where('user_id',Auth::user()->id)->count();
        $islam = resident::where('agama', 'Islam')->where('user_id',Auth::user()->id)->count();
        $kristen = resident::where('agama', 'Kristen Protestan')->where('user_id',Auth::user()->id)->count();
        $katolik = resident::where('agama', 'Kristen Katolik')->where('user_id',Auth::user()->id)->count();
        $hindu = resident::where('agama', 'Hindu')->where('user_id',Auth::user()->id)->count();
        $budha = resident::where('agama', 'Budha')->where('user_id',Auth::user()->id)->count();
        $konghucu = resident::where('agama', 'Konghucu')->where('user_id',Auth::user()->id)->count();

        //grafik pendidikan
        $pendidikan = resident::where('user_id',Auth::user()->id)->count();
        $sd = resident::where('pendidikan', 'SD')->where('user_id',Auth::user()->id)->count();
        $smp = resident::where('pendidikan', 'SMP')->where('user_id',Auth::user()->id)->count();
        $sma = resident::where('pendidikan', 'SMA/SMK')->where('user_id',Auth::user()->id)->count();
        $d3 = resident::where('pendidikan', 'D3')->where('user_id',Auth::user()->id)->count();
        $d4 = resident::where('pendidikan', 'Sarjana/D4')->where('user_id',Auth::user()->id)->count();
        $s2 = resident::where('pendidikan', 'S2')->where('user_id',Auth::user()->id)->count();

        //grafik status
        $status = resident::where('user_id',Auth::user()->id)->count();
        $sudah = resident::where('status', 'Sudah')->where('user_id',Auth::user()->id)->count();
        $belum = resident::where('status', 'Belum')->where('user_id',Auth::user()->id)->count();

        //grafik usia
        $umur = resident::all()->count();

        $penduduk = resident::all();
        $balita = 0;
        $anak = 0;
        $remaja = 0;
        $dewasa = 0;
        $lansia = 0;

        foreach($penduduk as $pen){
            $usia = Carbon::parse($pen->tanggal)->age;

             if ($usia >= 0 && $usia <= 5){
                $balita += 1;
            } elseif ($usia >= 6 && $usia <= 15){
                $anak += 1;
            } elseif ($usia >=16 && $usia <= 25){
                $remaja += 1;
            } elseif ($usia >= 26 && $usia <= 45){
                $dewasa += 1;
            } elseif ($usia >= 46 && $usia <= 100){
                $lansia += 1;
            }
        }

        
        return view('admindesa.dashboard', compact('jk', 'perempuan', 'laki', 'agama', 'islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu', 'pendidikan', 'sd', 'smp', 'sma', 'd3', 'd4', 's2', 'status', 'sudah', 'belum', 'umur', 'usia', 'balita', 'anak', 'remaja', 'dewasa', 'lansia'))
        ->with('jumlah_pkk', $jumlah_pkk)->with('jumlah_struktur', $jumlah_struktur)->with('jumlah_kt', $jumlah_kt)->with('jumlah_peraturan', $jumlah_peraturan)->with('jumlah_berita', $jumlah_berita)->with('jumlah_product', $jumlah_product)->with('jumlah_penduduk', $jumlah_penduduk)->with('jumlah_sarana', $jumlah_sarana);
    }

    
}

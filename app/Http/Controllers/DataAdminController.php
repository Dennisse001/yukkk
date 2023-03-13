<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\kirimEmail;
use App\Models\resident;
use App\Models\webprofile;
use App\Mail\ActivationMail;
use App\Models\desa_profile;
use App\Models\kt_structure;
use Illuminate\Http\Request;
use App\Models\pkk_structure;
use App\Exports\residentImport;
use App\Models\public_facility;
use App\Models\lembaga_structure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DataAdminController extends Controller
{  
    public function DataAdmin()
    {
          $pending = User::where('status', 'pending')->paginate(4);
        $pending1 = User::where('status', 'aktif')->paginate(4);
        
        return view ('webadmin.data_admin',['data'=>$pending,'data2'=>$pending1 ]);


    }

    public function deleteadmin($id){
        $data = User::Find($id)->delete();
        return redirect('dataadmin');
    }

  


    public function updateStatus($id)
{
    $data = User::find($id);

    if ($data->status == 'pending') {
        $data->status = 'aktif';

        Mail::to($data->email)->send(new kirimEmail());
        $user = desa_profile::create([
            'user_id' => $id,
            'gambar1' => 'desacontoh123.jpg',
            'gambar2' => 'desacontoh123.jpg',
            'gambar3' => 'desacontoh123.jpg',
            'sejarah' => 'buat sejarah desa dan ini adalah contoh sejarah desa',
            'visi' => 'ini adalah visi desa',
            'misi' => 'ini adalah misi desa',
            'batasutara' => 'contoh',
            'batasselatan' => 'contoh',
            'batastimur' => 'contoh',
            'batasbarat' => 'contoh',
        ]);

        $user = public_facility::create([
            'user_id' => $id,
            'rw'=> 0,
            'rt'=> 0,
            'paud'=> 0,
            'tk'=> 0,
            'sd'=> 0,
            'smp'=> 0,
            'sma'=> 0,
            'rumah'=> 0,
            'puskesmas'=> 0,
            'kesehatan'=> 0,
            'posyandu'=> 0,
            'kb'=> 0,
            'dokter'=> 0,
            'bidan'=> 0,
        ]);

        $user = resident::create([
            'user_id' => $id,
            'nama' => 'Contoh Nama',
            'tanggal' =>'2017-01-01',
            'jk' => 'Laki-Laki',
            'agama' => 'Budha',
            'alamat' => 'Bumi',
            'pendidikan' => 'Sarjana/D4',
            'status' => 'Sudah',
            
        ]);

        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '1',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '2',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '3',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = pkk_structure::create([
            'user_id' => $id,
            'id_jabatan' => '4',
            'nama' => 'contoh nama',
            'gambar' => 'contoh.png',
            
        ]);
        $user = lembaga_structure::create([
            'user_id' => $id,
            'gambar' => 'struktur.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '1',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '2',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '3',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);
        $user = kt_structure::create([
            'user_id' => $id,
            'id_jabatan' => '4',
            'nama' => 'contoh nama',
            'gambar' => 'contohgam.png',
        ]);


    }

    $data->save();

    return redirect()->back();
}




public function show($id)
{
    $user = User::find($id);
    return view('webadmin.lihat_desa',['data'=>$user]);
}
public function search1(Request $request)
    {
        $keyword = $request->search1;
        $data = User::where('name', 'LIKE', '%' . $keyword .'%')->where('status','pending')
        ->paginate(4);
        $data2 = User::where('status', 'aktif')->paginate(4);
        return view('webadmin.data_admin', compact('data', 'data2'));
    }
    public function search2(Request $request)
    {
        $keyword = $request->search2;
        $data2 = User::where('name', 'LIKE', '%' . $keyword .'%')->where('status','aktif')
        ->paginate(4);
        $data = User::where('status', 'pending')->paginate(4);
        return view('webadmin.data_admin', compact('data2', 'data'));
    }
   
}

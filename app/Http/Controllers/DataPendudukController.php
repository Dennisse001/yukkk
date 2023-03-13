<?php

namespace App\Http\Controllers;

use App\Exports\residentExport;
use App\Models\resident;
use Illuminate\Http\Request;
use App\Exports\residentImport;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DataPendudukController extends Controller
{
    public function datapenduduk()
    {
        $data = resident::where('user_id',Auth::user()->id)->paginate(8);
        return view('admindesa.data_penduduk', compact('data'));
    }
    public function tambahpenduduk(){
        return view('admindesa.tambah-penduduk');
    }


    public function insertpenduduk (Request $request){
        $data = resident::create($request -> all());
        $data->user_id = Auth::user()->id;
        $data->save();
        alert()->success('Sukses','Data berhasil di tambahakan');
        return redirect('data_penduduk');
    }

    public function export(){
     
        return Excel::download(new residentExport, 'data_penduduk.xlsx');
    }



    public function import(Request $request)
    {
        Excel::import(new residentImport,$request->excel);
        
        return redirect('data_penduduk');
    }

    public function tampilpenduduk ($id){
        $data = resident::find($id);
        return view('admindesa.tampil-penduduk', compact('data'));
    }
    public function updatependuduk(Request $request, $id){
        $data = resident::find($id);
        $data -> update($request -> all());
        alert()->success('Sukses','Data berhasil di edit');
        return redirect('data_penduduk');
    }
    public function deletependuduk($id){
        $data = resident::find($id);
        $data -> delete();
        return redirect('data_penduduk');
    }
    public function searchh(Request $request)
    {
        $keyword = $request->searchh;
        $data = resident::where('nama', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        return view('admindesa.data_penduduk', compact('data'));
    }
}

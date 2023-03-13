<?php

namespace App\Exports;

use App\Models\resident;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Auth;

class residentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return resident::where('user_id',Auth::user()->id)->select('nama','tanggal','agama','jk','alamat','pendidikan','status')->get();
    }
    public function headings():array
    {
        return[
            'Nama',
            'Tanggal',
            'Agama',
            'Jenis Kelamin',
            'Alamat',
            'Pendidikan',
            'Status',
        ];
    }
}

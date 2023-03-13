<?php

namespace App\Imports;

use App\Models\resident;
use Maatwebsite\Excel\Concerns\ToModel;

class residentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new resident([
            'name'  => $row['nama'],
            'tanggal' => $row['tanggal'],
            'agama'  => $row['agama'],
            'jk'  => $row['jk'],
            'alamat'  => $row['alamat'],
            'pendidikan'  => $row['pendidikan'],
            'status'  => $row['status'],

        ]);
    }
}

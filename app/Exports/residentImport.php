<?php

namespace App\Exports;

use App\Models\resident;
use Maatwebsite\Excel\Concerns\FromCollection;

class residentImport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return resident::all();
    }
}

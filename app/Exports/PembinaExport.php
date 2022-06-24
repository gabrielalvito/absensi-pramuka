<?php

namespace App\Exports;

use App\Models\Pembina;
use Maatwebsite\Excel\Concerns\FromCollection;

class PembinaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pembina::all();
    }
}

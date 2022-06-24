<?php

namespace App\Imports;

use App\Models\Pembina;
use Maatwebsite\Excel\Concerns\ToModel;

class PembinaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pembina([
            //
        ]);
    }
}

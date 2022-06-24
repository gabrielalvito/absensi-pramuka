<?php

namespace App\Imports;

use App\Models\SiswaDatadiri;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SiswaDatadiri([
            'nta' => $row[1],
            'nama' => $row[2],
            'kelas' => $row[3],
            'tempat_lahir' => $row[4],
            'tanggal_lahir' => $row[5],
            'jenis_kelamin' => $row[6],
            'agama' => $row[7],
            'alamat' => $row[8],
            'no_tlp' => $row[9],
            'golongan' =>$row[10],
            'no_kapling' =>$row[11],
            'nama_regu' =>$row[12],
            'jabatan'  =>$row[13]
        ]);
    }
}

<?php

namespace App\Imports;

use App\Models\guru;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class GuruImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
          return new guru([
            'nip' => $row[0],
            'nama' => $row[1],
            'email' => $row[2],
            'level' => $row[3],
            'kode_mapel' => $row[4],
            'gender' => $row[5],
            'alamat' => $row[6],
            'kecamatan' => $row[7],
            'kota' => $row[8],
            'kodepos' => $row[9],
            'username' => $row[10],
            'password' => Hash::make($row[11])
        ]);
    }
}

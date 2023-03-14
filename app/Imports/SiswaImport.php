<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class SiswaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
       return new Siswa([
            'nis' => $row[0],
            'nama' => $row[1],
            'kode_kelas' => $row[2],
            'email' => $row[3],
            'gender' => $row[4],
            'alamat' => $row[5],
            'tahun' => $row[6],
            'kecamatan' => $row[7],
            'kota' => $row[8],
            'kodepos' => $row[9],
            'username' => $row[10],
            'password' => Hash::make($row[11])
        ]);
    }
}

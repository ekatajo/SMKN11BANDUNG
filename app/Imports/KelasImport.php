<?php

namespace App\Imports;

use App\Models\kelas;
use Maatwebsite\Excel\Concerns\ToModel;

// Implements (Interface)
class KelasImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new kelas([
            'kode' => $row[0],
            'kelas' => $row[1],
            'jurusan' => $row[2],
            'rombel' => $row[3],
        ]);
    }
}

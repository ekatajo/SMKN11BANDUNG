<?php

namespace App\Imports;

use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel, withHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new user([
            'username' => $row['username'],
            'level' => $row['level'],
            'password' => Hash::make($row['password'])
        ]);
    }
}

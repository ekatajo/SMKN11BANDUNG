<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nis' => (271628),
            'NamaSiswa' =>  Str::random(10),
            'kelas' =>  Str::random(10),
            'Tmplahir' =>  Str::random(10),
            'Alamat_Siswa' =>  Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);
    }
}

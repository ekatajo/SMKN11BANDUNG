<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Mapel;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        $kelas = [
            [
                'kode' => '10PPLG2',
                'kelas' => '10',
                'jurusan' => 'Pemograman Perangkat Lunak Gim',
                'rombel' => '2'
            ],
            [
                'kode' => '10DKV1',
                'kelas' => '10',
                'jurusan' => 'Desain Komunikasi Visual',
                'rombel' => '1'
            ],
            [
                'kode' => '10MPLB1',
                'kelas' => '10',
                'jurusan' => 'Manajemen Logistik',
                'rombel' => '1'
            ],
            [
                'kode' => '10AKL1',
                'kelas' => '10',
                'jurusan' => 'Multimedia',
                'rombel' => '1'
            ],
            [
                'kode' => '10PM1',
                'kelas' => '10',
                'jurusan' => 'Pemasaran',
                'rombel' => '1'
            ],

        ];
        $mapel = [
            [
                'kode' => 'M-001',
                'kelas' => '10',
                'nama' => 'Matematika',
            ],
            [
                'kode' => 'B-001',
                'kelas' => '10',
                'nama' => 'Bahasa Indonesia',
            ],
            [
                'kode' => 'BK-001',
                'kelas' => '10',
                'nama' => 'Bimbingan Konseling',
            ],
        ];
        $guru = [
            [   
                'nama' => 'Usep',
                'nip' => '195009010',
                'username' =>  'Admin',
                'level' =>  'Kurikulum',
                'email' =>  'Usep@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No.48',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '406580',
                'kode_mapel' => 'M-001'
            ],

            [
                'nama' => 'Ujang',
                'nip' => '199009090',
                'username' =>  'Ujang',
                'level' =>  'Guru',
                'email' =>  'Ujang@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No. 908',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '408080',
                'kode_mapel' => 'M-001'
            ],

            [   
                'nama' => 'Rahmat',
                'nip' => '1980070800',
                'username' =>  'Kemet',
                'level' =>  'Guru',
                'email' =>  'Rahmat@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No. 90',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '407080',
                'kode_mapel' => 'M-001'
            ],

                        [   
                'nama' => 'Anton Gordon',
                'nip' => '1980609080',
                'username' =>  'Anton',
                'level' =>  'Guru',
                'email' =>  'Rahmat@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No. 90',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '407080',
                'kode_mapel' => 'B-001'
            ],
                        [   
                'nama' => 'Sandi',
                'nip' => '1980204590',
                'username' =>  'Sandi',
                'level' =>  'Guru',
                'email' =>  'Rahmat@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No. 90',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '407080',
                'kode_mapel' => 'BK-001'
            ],
                        [   
                'nama' => 'Rover',
                'nip' => '198056900',
                'username' =>  'Rover',
                'level' =>  'Guru',
                'email' =>  'Rahmat@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No. 90',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '407080',
                'kode_mapel' => 'M-001'
            ],
                        [   
                'nama' => 'Andika',
                'nip' => '198025459',
                'username' =>  'Andika',
                'level' =>  'Guru',
                'email' =>  'Rahmat@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'alamat' => 'Jl. Setiabudhi No. 90',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '407080',
                'kode_mapel' => 'B-001'
            ],
        ];

                $siswa = [
            [
                'nama' => 'Akbar',
                'nis' => '20065080',
                'username' =>  'Akbar',
                'email' =>  'Akbar@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10PPLG2',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
             [
                'nama' => 'Aji',
                'nis' => '20065789',
                'username' =>  'Aji',
                'email' =>  'Aji@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10PPLG2',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
                        [
                'nama' => 'Fauzan',
                'nis' => '200690900',
                'username' =>  'Fauzan',
                'email' =>  'Akbar@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10PPLG2',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
                        [
                'nama' => 'Abdul',
                'nis' => '20068900',
                'username' =>  'Abdul',
                'email' =>  'Abdul@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10PPLG2',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
              [
                'nama' => 'Gilang',
                'nis' => '20090800',
                'username' =>  'Gilang',
                'email' =>  'Gilang@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10DKV1',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
            [
                'nama' => 'Aldian',
                'nis' => '20096700',
                'username' =>  'Aldian',
                'email' =>  'Aldian@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10DKV1',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
            [
                'nama' => 'Syarif',
                'nis' => '20097890',
                'username' =>  'Syarif',
                'email' =>  'Syarif@gmail.com',
                'password'  =>  bcrypt('12345'),
                'gender'  =>  'L',
                'kode_kelas' => '10DKV1',
                'alamat' => 'Jl. Setiabudhi No. 9',
                'kota' => 'Bandung',
                'kecamatan' => 'Sukasari', 
                'kodepos' => '409090',
                'tahun' => '2023'
            ],
        ];

        foreach ($kelas as $user) {
            Kelas::create($user);
        }
        foreach ($mapel as $user) {
            Mapel::create($user);
        }
        foreach ($siswa as $user) {
            Siswa::create($user);
        }
        foreach ($guru as $users) {
            Guru::create($users);
        }
    }
}

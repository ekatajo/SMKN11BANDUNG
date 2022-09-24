<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['username' =>  'Hubin',
            'email' =>  'hubin@gmail.com',
            'level' =>  'hubin',
            'password'  =>  bcrypt('12345')  
             ],
            ['username' =>  'Siswa',
            'email' =>  'siswa@gmail.com',
            'level' =>  'siswa',
            'password'  =>  bcrypt('12345')  
             ],
            ['username' =>  'Pembimbing Sekolah',
            'email' =>  'pembimbingsekolah@gmail.com',
            'level' =>  'pembimbing sekolah',
            'password'  =>  bcrypt('12345')  
            ],
            ['username' =>  'Pembimbing Perusahaan',
            'email' =>  'pembimbingperusahaan@gmail.com',
            'level' =>  'pembimbing perusahaan',
            'password'  =>  bcrypt('12345')  
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}

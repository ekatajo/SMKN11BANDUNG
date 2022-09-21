<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function jurnalsiswa(){
        return view('siswa.jurnalsiswa', [
            'title' =>  'Siswa | Jurnal Siswa',
            'titleheader'   =>  'Jurnal Siswa'
        ]);
    }

    public function sikapsiswa(){
        return view('siswa.sikapsiswa', [
            'title' =>  'Siswa | Sikap Siswa',
            'titleheader'   =>  'Sikap Siswa'
        ]);
    }

    public function daftarindustrisiswa(){
        return view('siswa.daftarindustri-siswa', [
            'title' =>  'Siswa | Daftar Industri',
            'titleheader'   =>  'Daftar Industri'
        ]);
    }

}

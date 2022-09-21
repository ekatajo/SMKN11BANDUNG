<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubinController extends Controller
{
    public function index(){
        return view('perusahaanhubin', [
            'title' => 'Daftar Perusahaan'
        ]);
    }

    public function hubinperusahaan(){
        return view('hubin.perusahaanhubin', [
            'title' =>  'Daftar Perusahaan',
            'titleheader'   =>  'Daftar Perusahaan'
        ]);
    }

    public function hubinpemetaan(){
        return view('hubin.pemetaanpkl', [
            'title' =>  'Daftar Perusahaan',
            'titleheader'   =>  'Daftar Perusahaan'
        ]);
    }

    public function siswaterdaftarhubin(){
        return view('hubin.siswaterdaftarhubin', [
            'title' =>  'Hubin | Siswa Terdaftar',
            'titleheader'   =>  'Daftar Perusahaan'
        ]);
    }
    
    public function daftarsiswahubin(){
        return view('hubin.daftarsiswahubin', [
            'title' =>  'Hubin | Daftar Siswa',
            'titleheader'   =>  'Daftar Siswa'
        ]);
    }
}

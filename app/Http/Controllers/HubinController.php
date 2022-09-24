<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

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

    public function hubineditakunsiswa (){
        return view('hubin.editakunsiswa', [
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
        $data = Siswa::all();


        return view('hubin.daftarsiswahubin', [
            'title' =>  'Hubin | Daftar Siswa',
            'titleheader'   =>  'Daftar Siswa'
        ], compact('data'));
    }

    public function cetaksurat(){
        return view('hubin.cetaksurat', [
            'title' =>  'Hubin | Cetak Surat',
            'titleheader'   =>  'Cetak Surat'
        ]);
    }
}

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function pembimbingperusahaan(){
        return view('pembimbing-perusahaan.pembimbing-perusahaan', [
            'title' =>  'Dashboard | Pembimbing Perusahaan',
            'titleheader'   =>  'Pembimbing Perusahaan'
        ]);
    }
}

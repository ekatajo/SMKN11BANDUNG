<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function evaluasipkl(){
        return view('pembimbing-sekolah.evaluasipkl', [
            'title' =>  'Dashboard | Evaluasi PKL',
            'titleheader'   =>  'Evaluasi PKL'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class LoginController extends Controller
{
    public function viewlogin(){
        return view('login', [
            'title' =>  'Login E-Prakerin'
        ]);
    }
}

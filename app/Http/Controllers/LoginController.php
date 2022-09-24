<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewlogin(){
        return view('login', [
            'title' =>  'Login E-Prakerin'
        ]);
    }

    public function postlogin(request $request){
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect('/dashboard/hubin');
        }

        return redirect('/login');
    }

    public function logout(request $request){
        Auth::logout();
        return redirect('/login');
    }
}

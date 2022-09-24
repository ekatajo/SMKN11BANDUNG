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
            if(auth()->user()->role == 'hubin'){
                return redirect('/dashboard/hubin');
            }
            else if(auth()->user()->level == 'siswa'){
                return redirect('/dashboard/siswa');
            }
            else if(auth()->user()->level == 'pembimbing sekolah'){
                return redirect('/dashboard/pembimbing-sekolah');
            }
            else if(auth()->user()->level == 'pembimbing perusahaan'){
                return redirect('/dashboard/pembimbing-sekolah');
            }
            else {
                return redirect('/');
            }
        }
            else {
                return redirect('/login');
            }
    }

    public function logout(request $request){
        Auth::logout();
        return redirect('/login');
    }
}

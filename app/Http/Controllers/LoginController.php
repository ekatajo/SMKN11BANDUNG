<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class LoginController extends Controller
{
    public function viewlogin()
    {
        return view('login', [
            'title' =>  'Raport Diagnostik'
        ]);
    }

    // Tujukan pada saat Login pastikan saat Logout Tidak bisa diback dan tembak URLnya
    public function postlogin(request $request)
    {
        // if (Auth::attempt($request->only('username', 'password'))) {
        if (Auth::guard('guru')->attempt([
            'username' => $request->username, 'password' => $request->password
        ])) {
            $request->session()->regenerate();
            if (\Auth::guard('guru')->user()->level == 'Kurikulum') {
                return redirect('/kurikulum');
            } else if (\Auth::guard('guru')->user()->level == 'Guru') {
                return redirect('/guru');
            }
        }

        if (Auth::guard('siswa')->attempt([
            'username' => $request->username, 'password' => $request->password
        ])) {
            $siswa = Siswa::where('username', $request->username);
            $request->session()->regenerate();
            return redirect('/siswa');
        }
        return redirect('/login')->with('gagal-login', 'Username Atau Password Salah!');;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Walikelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{   
    // Index
    public function dashboard(Request $request)
    {
        return view('siswa.dashboard', [
            'title' => 'Dashboard',
            'kelas' => auth()->user()->kode_kelas,
        ]);
    }

    // Raport
    public function raport(Siswa $siswa)
    {
        $mapel = Mapel::with(['komponen' => function ($query) use ($siswa) {
            return $query->whereHas('nilai', function ($query2) use ($siswa) {
                $query2->where('nis', $siswa->nis);
            })->with(['nilai' => function ($query3) use ($siswa) {
                return $query3->where('nis', $siswa->nis);
            }]);
        }])->get();

        return view('siswa.raport', [
            'title' => 'Nilai',
            'siswa' => $siswa
        ], compact('siswa', 'mapel'));
    }
}

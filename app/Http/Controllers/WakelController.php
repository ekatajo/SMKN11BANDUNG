<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\ActivityLog;
use App\Models\Komponen;
use App\Models\Nilai;
use App\Models\LogKomponen;
use App\Models\LogNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Carbon\Carbon;

class WakelController extends Controller
{
    // Index
    public function dashboard()
    {
        return view('wakel.dashboard', [
            'title' => 'Dashboard']);
    }

    // Kelas untuk menampilkan data siswa
     public function kelas_siswa()
    {
        $guru = Guru::where('nip', auth()->user()->nip)->with('kelasWK')
        ->first();
        return view('wakel.kelas_siswa', [
            'title' => 'Data Kelas',
        ], compact('guru'));
    }
    // Data Siswa
    public function data_siswa(Request $request, $kode)
    {
        $siswa = Siswa::where('kode_kelas', $request->kode)->with('kelas')->get();
        $kelas = Kelas::find($kode);
        return view('wakel.siswa', [
            'title' => 'Data Siswa',
        ], compact('siswa', 'kelas'));
    }

    // Kelas untuk menampilkan data guru
    public function kelas_guru()
    {
        $guru = Guru::where('nip', auth()->user()->nip)->with('kelasWK')
        ->first();
        return view('wakel.kelas_guru', [
            'title' => 'Data Kelas',
        ], compact('guru'));
    }
    // Data Guru
    public function data_guru(Request $request, $kode)
    {
        $kode = $request->kode;
        $guru = Guru::whereHas('nilai', function($query) use ($kode){
            $query->where('tahun', Carbon::now()->format('y'))->whereHas('siswa', function($query3) use ($kode) {
                $query3->whereHas('kelas', function($query4) use ($kode) {
                    $query4->where('kode', $kode);
                });
            });
        })->with('mapel')->get();
        
        return view('wakel.guru', [
            'title' => 'Data Guru',
        ], compact('guru'));
    }
    // Detail Guru
    public function detail($nip){
        $guru = Guru::where('nip', $nip)->first();
        $logK = LogKomponen::where('nip', $nip)->paginate(5);
        $logN = LogNilai::where('nip', $nip)->paginate(5);
        return view('wakel.detail', [
            'title' => 'Detail'
        ], compact('logN', 'logK', 'guru'));
    }

    // Raport
    public function raport($kode, Siswa $siswa)
    {
        $mapel = Mapel::with(['komponen' => function ($query) use ($siswa) {
            return $query->whereHas('nilai', function ($query2) use ($siswa) {
                $query2->where('nis', $siswa->nis);
            })->with(['nilai' => function ($query3) use ($siswa) {
                return $query3->where('nis', $siswa->nis);
            }]);
        }])->get();
        $kelas = Kelas::where('kode', $kode)->first();
        return view('wakel.raport', [
            'title' => 'Raport',
            'siswa' => $siswa
        ], compact('siswa', 'mapel', 'kelas'));
    }
    
}

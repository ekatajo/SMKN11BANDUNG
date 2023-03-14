<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Komponen;
use App\Models\Nilai;
use App\Models\LogKomponen;
use App\Models\LogNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;

// (Extends) Inheritansi 
class GuruController extends Controller
{   
    // Method (Class Diagram)
    public function dashboard()
    {
        $komponen = komponen::count();
        $mapel = mapel::count();
        return view('guru.dashboard', [
            'title' => 'Dashboard'
        ], compact(['mapel', 'komponen']));
    }

    // Komponen
    public function komponen($kode, Request $request)
    {
        $guru = Guru::where('nip', auth()->user()->nip)->with('mapel')->get();
        $komponen = Komponen::where('kode_mapel', $request->kode)->get();
        $mapel = Mapel::find($kode);
        return view('guru.komponen', [
            'title' => 'Komponen'
        ], compact('komponen', 'guru', 'mapel'));
    }
    public function proses_komponen(Request $request)
    {   
        try {
        foreach ($request->nama_komponen as $key => $value) {   
            DB::table('komponen')->insert([
                'kode_mapel'  =>  $request->kode_mapel,
                'nip'  =>  $request->nip,
                'nama' => $value
            ]);
        }
    } catch (\Illuminate\Database\QueryException $exception) {
        if ($exception->errorInfo[1] == 1062) {
            // Kode 1062 menunjukkan adanya duplikat data di database.
            return redirect()->back()->with('error', 'Data Sudah Tersedia!');
   } else {
       // Tangani error lain yang terjadi.
       return redirect()->back()->with('error', 'Terjadi kesalahan: '.$exception->getMessage());
   }
   }

        // alihkan halaman kembali
        return redirect()->back()->with('sukses', 'Data Berhasil Ditambah');
    }
    public function edit_komponen(Request $request, $id)
    {
        $komponen = Komponen::find($id);
        $komponen->update($request->all());
        return redirect()->back()->with('sukses', 'Data Berhasil Diupdate');
    }
    public function hapus_komponen($id)
    {
        $komponen = Komponen::find($id);
        $komponen->delete($id);
        return redirect()->back()->with('sukses', 'Data Berhasil Dihapus');
    }

    // Kelas
    public function data_kelas()
    {
        $kelas = Kelas::with('siswa')->get();
        return view('guru.kelas', [
            'title' => 'Kelas'
        ], compact('kelas'));
    }

    // Kelas
    public function data_siswa(Request $request)
    {
        $siswa = Siswa::where('kode_kelas', $request->kode_kelas)->where('tahun', Carbon::now()->format('y'))->with('kelas')->get();
        $mapel = Mapel::find($request->kode_mapel);
        return view('guru.siswa', [
            'title' => 'Siswa'
        ], compact(['siswa', 'mapel']));
    }

    // Matapelajaran

    public function penilaian(Request $request)
    {
        $komponen = Komponen::where('kode_mapel', $request->kode_mapel)
        ->get();
        $siswa = Siswa::where('nis', $request->nis)->first();
        $kelas = Kelas::where('kode', $request->kode_kelas)->first();
        $mapel = Mapel::where('kode', auth()->user()->kode_mapel)->first();
        return view('guru.nilai', [
            'title' => 'Nilai'
        ], compact('komponen', 'siswa', 'mapel', 'kelas'));
    }

    public function proses_nilai(Request $request, $kode_mapel, Siswa $siswa)
    {
        
        $predikat = '';

        if ((int)$request->nilai >= 85) {
            $predikat = "A";
        } else if ((int)$request->nilai < 85 && (int)$request->nilai >= 70) {
            $predikat = "B";
        } else if ((int)$request->nilai < 70 && (int)$request->nilai >= 50) {
            $predikat = "C";
        } else {
            $predikat = "D";
        }

        $validate = Nilai::where('nis', $request->nis)->where('id_komponen', $request->id_komponen)->first();

        if ($validate) {
            return redirect()->back()->with('nilai-ada', 'Nilai Dari Komponen Ini Sudah Ada');
        }


        DB::table('nilai')->insert([
            'nip' => auth()->user()->nip,
            'nis'  =>  $siswa->nis,
            'kode_mapel' =>  $kode_mapel,
            'id_komponen' => $request->id_komponen,
            'nilai' => $request->nilai,
            'predikat' => $predikat,
            'keterangan' => $request->keterangan,
            'tahun' => $siswa->tahun,
        ]);
        return redirect()->back()->with('sukses', 'Nilai berhasil ditambahkan');
    }
    public function edit_nilai(Request $request)
    {
        $predikat = '';

        if ((int)$request->nilai >= 85) {
            $predikat = "A";
        } else if ((int)$request->nilai < 85 && (int)$request->nilai >= 70) {
            $predikat = "B";
        } else if ((int)$request->nilai < 70 && (int)$request->nilai >= 50) {
            $predikat = "C";
        } else {
            $predikat = "D";
        }

        DB::table('nilai')->where('id', $request->id)->update([
            'id' => $request->id,
            'nilai' => $request->nilai,
            'predikat' => $predikat,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->back()->with('sukses', 'Data Berhasil Diupdate');
    }
    public function hapus_nilai($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete($id);
        return redirect()->back()->with('sukses', 'Data Berhasil Dihapus');
    }
    public function mapel_komponen()
    {
        $guru = Guru::where('nip', auth()->user()->nip)->with('mapel')->get();
        return view('guru.mapel_komponen', [
            'title' => 'Komponen'
        ], compact('guru'));
    }
    public function komponen_mapel(Request $request, $kode)
    {
        $guru = Guru::where('nip', auth()->user()->nip)->with('kelas', 'mapel')->first();
        $komponen = Komponen::where('nip', auth()->user()->nip)->where('kode_mapel', $request->kode)->get();
        $kelas = Kelas::all();
        $mapel = Mapel::find($kode);
        return view('guru.komponen', [
            'title' => 'Komponen'
        ], compact('guru', 'kelas', 'mapel', 'komponen'));
    }

    public function mapel_kelas(Request $request, $kode)
    {
        $mapel = Mapel::find($kode);
        return view('guru.mapel_kelas', [
            'title' => 'Komponen'
        ], compact('mapel'));
    }

    public function kelas_siswa(Request $request, $kode)
    {
        return view('guru.kelas_siswa', [
            'title' => 'Komponen'
        ]);
    }

    public function rekap($kelas, $mapel, $nis)
    {
          $mapel = Mapel::where('kode', $mapel)->with(['komponen' => function ($query) use ($nis) {
            return $query->whereHas('nilai', function ($query2) use ($nis) {
                $query2->where('nis', $nis);
            })->with(['nilai' => function ($query3) use ($nis) {
                return $query3->where('nis', $nis);
            }]);
        }])->get();

        return view('guru.rekapnilai', [
            'title' => 'Rekapitulasi Penilaian',
            'siswa' => Siswa::where('nis', $nis)->with('kelas')->first(),
            'nilai' => Nilai::where('nis', $nis)->with('komponen')->get(),
            'mapel' => $mapel,
        ]);
    }

    public function aktivitas()
    {
        $guru3 = Guru::where('kode_mapel', auth()->user()->kode_mapel)->count();
         // parameter di Function DB
         $p_siswa = Carbon::now()->format('y');
         // Variabel nampung 
         // total angkatan (?) dimana alias totalangkatan (seperti di foreach)
        $angkatanFunc = DB::select('SELECT total_angkatan(?) AS totalAngkatan', [$p_siswa]); 
        $nip = auth()->user()->nip;
        // $proc = DB::statement('CALL tahun_siswa');
        $testProc =  DB::select('CALL komponen_guru(?)', [$nip]);
        $mapel = Mapel::where('kode', auth()->user()->kode_mapel)->first();
        $komponen = Komponen::where('kode_mapel', auth()->user()->kode_mapel)->count();
        $kelas = Kelas::count();
        $logK = LogKomponen::where('kode_mapel', auth()->user()->kode_mapel)
            ->latest()
            ->skip(0)
            ->take(5)
            ->get();
        $logN = LogNilai::where('kode_mapel', auth()->user()->kode_mapel)
            ->latest()
            ->skip(0)
            ->take(5)
            ->get();
        $guru2 = Guru::where('kode_mapel', auth()->user()
            ->kode_mapel)->get();
        return view('guru.aktivitas',[
                'title' => 'Aktivitas',
                'testProc'  => $testProc,
                // Karena di Procdure tidak ada fungsi Count dibuatkan arraynya
                'array' =>  count($testProc),
            ],compact('logN', 'logK', 'guru2', 'guru3', 'mapel', 'kelas', 'komponen', 'angkatanFunc', 'testProc')
        );
    }
    
    public function detail($nip){
        $guru = Guru::where('nip', $nip)->first();
        $logK = LogKomponen::where('nip', $nip)->paginate(5);
        $logN = LogNilai::where('nip', $nip)->paginate(5);
        return view('guru.detail', [
            'title' => 'Detail'
        ], compact('logN', 'logK', 'guru'));
    }
}

// Query data guru di wakel
// SELECT
// siswa.nama,siswa.nis,siswa.gender,nilai.`nilai`,nilai.`nip`,siswa.`kode_kelas`
// FROM siswa
// JOIN nilai
// ON nilai.nis=siswa.nis where kode_kelas = '10RPL2'
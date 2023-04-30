<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Walikelas;
use App\Models\LogKomponen;
use App\Models\LogNilai;
use App\Imports\GuruImport;
use App\Imports\KelasImport;
use App\Imports\MapelImport;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Illuminate\Validation\Validator;


class KurikulumController extends Controller
{   

    // public function guruMapel(){
    //     $testView = DB::select('SELECT * FROM guru_mapel');
    //     $array = Count($testView);

    //     return view('kurikulum.gurumapel', [
    //         'title' =>  'Guru Mapel',
    //         'testView'  =>  $testView,
    //         'array' =>  $array
    //     ]);
    // }

    // Data Siswa Sesuai Predikat
    public function siswapredikat_a(){
        $testView = DB::select('SELECT * FROM siswa_predikata');
        $array = Count($testView);

        return view('kurikulum.siswa_predikatA', [
            'title' =>  'Predikat A',
            'testView'  =>  $testView,
            'array' =>  $array
        ]);
    }
    public function siswapredikat_b(){
        $testView = DB::select('SELECT * FROM siswa_predikatb');
        $array = Count($testView);

        return view('kurikulum.siswa_predikatB', [
            'title' =>  'Predikat B',
            'testView'  =>  $testView,
            'array' =>  $array
        ]);
    }
    public function siswapredikat_c(){
        $testView = DB::select('SELECT * FROM siswa_predikatc');
        $array = Count($testView);

        return view('kurikulum.siswa_predikatC', [
            'title' =>  'Predikat C',
            'testView'  =>  $testView,
            'array' =>  $array
        ]);
    }

    // Index
    public function dashboard()
    {   
        $siswa = Siswa::count();
        $guru  = guru::count();
        $mapel = mapel::count();
        $kelas = Kelas::count();
        $students = DB::table('siswa')
                ->select('kode_kelas', DB::raw('count(*) as total'))
                ->groupBy('kode_kelas')
                ->get();
        $teachers = DB::table('guru')
                ->select('kode_mapel', DB::raw('count(*) as total'))
                ->groupBy('kode_mapel')
                ->get();
        return view('kurikulum.dashboard', [
            'title' => 'Dashboard'
        ], compact(['siswa', 'guru', 'mapel', 'kelas', 'students', 'teachers']));
    }

    public function backup() {
        Artisan::queue('backup:run --only-db');

        $path = Storage::disk('public')->path("Laravel/*");        
        $latest_ctime = 0;
        $latest_filename = '';

        $files = glob($path);
        foreach($files as $file) {
            if(is_file($file) && filectime($file) > $latest_ctime) {
                $latest_ctime = filectime($file);
                $latest_filename = $file;
            }
        }

        return Response::download($latest_filename);
    }
    
    // Cetak PDF
    public function cetak($kode, Siswa $siswa)
    {
        $mapel = Mapel::with(['komponen' => function ($query) use ($siswa) {
            return $query->whereHas('nilai', function ($query2) use ($siswa) {
                $query2->where('nis', $siswa->nis);
            })->with(['nilai' => function ($query3) use ($siswa) {
                return $query3->where('nis', $siswa->nis);
            }]);
        }])->get();
        return view('kurikulum.cetak-pdf', [
            'title' => 'PDF',
            'siswa' => $siswa
        ], compact('siswa', 'mapel'));
    }

    // Raport Siswa
    public function raport($kode, Siswa $siswa)
    {
        // Ambil Model Mapel dengan relasi komponen, dan komponen mempunyai relasi nilai dengan siswa = nis
        // Wherehas = Cek relasi, With = Ambil Relasi.
        $mapel = Mapel::with(['komponen' => function ($query) use ($siswa) {
            // Karena Function jadi return dulu ngecek baru ambil
            return $query->whereHas('nilai', function ($query2) use ($siswa) {
                $query2->where('nis', $siswa->nis);
            })->with(['nilai' => function ($query3) use ($siswa) {
                return $query3->where('nis', $siswa->nis);
            }]);
        }])->get();
        return view('kurikulum.raport', [
            'title' => 'Raport',
            'siswa' => $siswa
        ], compact('siswa', 'mapel'));
    }

    // Kelas untuk menampilkan data siswa
    public function kelas_siswa()
    {
        $kelas = Kelas::all();
        return view('kurikulum.kelas_siswa', [
            'title' => 'Data Siswa'
        ], compact('kelas'));
    }
    // Data Siswa
    public function data_siswa(Request $request, $kode)
    {
        $tahun = Carbon::now()->format('y');
        $siswa = Siswa::where('kode_kelas', $request->kode)
            ->where('tahun', $tahun)->with('kelas')->get();
        $kelas = Kelas::find($kode);
        return view('kurikulum.siswa', [
            'title' => 'Data Siswa',
        ], compact('siswa', 'kelas'));
    }
    // Filter Siswa
    public function tahun_siswa(Request $request, $kode)
    {   
        $siswa = Siswa::where('tahun', $request->tahun)->with('kelas')->get();
        $kelas = Kelas::find($kode);
        return view('kurikulum.siswa', [
            'title' => 'Data Siswa',
        ], compact('siswa', 'kelas'));
    }
    // Tambah Data Siswa
    public function tambah_siswa(Request $request, $kode)
    {   
            $validatedData = $request->validate([
                'nis' => 'required|max:11|unique:siswa,nis',
                'nama' => 'required|max:255',
                'email' => 'required|max:255|email',
                'username' => 'required|max:255|unique:siswa,username',
                'password' => 'required|max:255',
                'kode_kelas' => 'required',
                'gender' => 'required',
                'alamat' => 'required',
                'kecamatan' => 'required|max:255',
                'kota' => 'required|max:255',
                'kodepos' => 'required|max:255',
                'tahun' => 'required|date_format:Y'
            ]);
    
            $validatedData['password'] = Hash::make($validatedData['password']);
            Siswa::create($validatedData);
            return redirect('/kurikulum/kelas_siswa/'.$kode.'/data_siswa')->with('sukses','Data Berhasil Ditambah');
    }
        // Validasi Form (Tunjakan sampai prosesnya)
       
    // Edit Data Siswa
    public function edit_siswa(Request $request, $kode)
    {   
        $siswa = Siswa::where('nis', $request->nis);
        $siswa->update($request->except(['_token']));
        return redirect('/kurikulum/kelas_siswa/'.$kode.'/data_siswa')->with('sukses', 'Data Berhasil Diupdate');
    }
    // Hapus Data Siswa
    public function hapus_siswa(Request $request, $kode)
    {   
        $siswa = Siswa::where('nis', $request->nis);
        $siswa->delete();
        return redirect('/kurikulum/kelas_siswa/'.$kode.'/data_siswa')->with('sukses', 'Data Berhasil Dihapus');
    }

    // Data Guru
    public function data_guru()
    {
        $guru = Guru::with('mapel')->get();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('kurikulum.guru.guru', [
            'title' => 'Data Guru'
        ], compact('guru', 'kelas', 'mapel'));
    }
    // Tambah Data Guru
    public function tambah_guru(Request $request)
    {   
            $validatedData = $request->validate([
                'nip' => 'required|max:11|unique:guru,nip',
                'nama' => 'required|max:255',
                'email' => 'required|max:255|email',
                'username' => 'required|max:255|unique:guru,username',
                'password' => 'required|max:255',
                'level' => 'required',
                'gender' => 'required',
                'alamat' => 'required|max:255',
                'kecamatan' => 'required|max:255',
                'kota' => 'required|max:255',
                'kodepos' => 'required|max:255',
                'kode_mapel' => 'required'
            ]);
            
            $validatedData['password'] = Hash::make($validatedData['password']);
            Guru::create($validatedData);
            return redirect('/kurikulum/data_guru')->with('sukses','Data Berhasil Ditambah');
    }
    // Edit Data Guru
    public function edit_guru(Request $request, $nip)
    {
        $guru = Guru::find($nip);
        $guru->update($request->all());
        return redirect('/kurikulum/data_guru')
        ->with('sukses', 'Data Berhasil Diupdate');
    }
    // Hapus Data Guru
    public function hapus_guru($nip)
    {
        $guru = Guru::find($nip);
        $guru->delete($nip);
        return redirect('/kurikulum/data_guru')
        ->with('sukses', 'Data Berhasil Dihapus');
    }
    // Detail Guru
    public function detail_guru($nip)
    {
        $guru = Guru::where('nip', $nip)->with('kelas', 'mapel')->first();
        $kelas = Kelas::doesntHave('walikelas')->get();
        $walikelas = Walikelas::where('nip', $nip)->with('kelas')->first();
        $mapel = Mapel::all();
        $logK = LogKomponen::where('nip', $nip)->paginate(5);
        $logN = LogNilai::where('nip', $nip)->paginate(5);
        // dd(strlen($walikelas->kode_kelas) < 1);
        return view('kurikulum.guru.detail', [
            'title' => 'Detail Guru'
        ], compact('guru', 'kelas', 'mapel', 'walikelas', 'logK', 'logN'));
    }
    // Pemetaan Walikelas
    public function tambah_wakel(Request $request, $nip)
    {
        $validate = Walikelas::where('nip', $request->nip)->where('kode_kelas', $request->kode_kelas)->first();
        if ($validate) {
            return redirect()->back()
            ->with('kelas-ada', 'Kelas ini sudah Terisi'); }
        
        DB::table('walikelas')->insert([
            'nip'  =>  $request->nip,
            'kode_kelas' => $request->kode_kelas,
        ]);
        return redirect()->back()->with('sukses', 'Data berhasil ditambahkan');
    }
    // Edit Walikelas
    public function edit_wakel(Request $request, $nip)
    {
        $wakel = Walikelas::where('nip', $nip)->first();
        $wakel->update($request->all());
        return redirect()->back()->with('sukses', 'Berhasil Diupdate');
    }
    // Hapus Walikelas
    public function hapus_wakel($nip)
    {
        $wakel = Walikelas::where('nip', $nip)->first();
        $wakel->delete();
        return redirect()->back()->with('sukses', 'Berhasil Dihapus');
    }
    
    // Matapelajaran
    public function data_mapel()
    {
        $mapel = Mapel::all();
        return view('kurikulum.mapel', [
            'title' => 'Mata Pelajaran'
        ], compact('mapel'));
    }
    // Tambah Data Mata Pelajaran
    public function tambah_mapel(Request $request)
    {   
            $validatedData = $request->validate([
                'kode' => 'required|max:255|unique:mapel,kode',
                'nama' => 'required|max:255',
                'kelas' => 'required|max:255',
            ]);
            Mapel::create($validatedData);
            return redirect('/kurikulum/data_mapel')->with('sukses','Data Berhasil Ditambah');

    }
    // Edit Data Mata Pelajaran
    public function edit_mapel(Request $request, $kode)
    {
        $mapel = Mapel::find($kode);
        $mapel->update($request->all());
        return redirect('/kurikulum/data_mapel')->with('sukses', 'Data Berhasil Diupdate');
    }
    // Hapus Data Mata Pelajaran
    public function hapus_mapel($kode)
    {
        $mapel = Mapel::find($kode);
        $mapel->delete($kode);
        return redirect('/kurikulum/data_mapel')
        ->with('sukses', 'Data Berhasil Dihapus');
    }

    // Data Kelas
    public function data_kelas()
    {
        $kelas = kelas::all();
        return view('kurikulum.kelas', [
            'title' => 'Data Kelas'
        ], compact('kelas'));
    }
    // Tambah Data Kelas
    public function tambah_kelas(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required|max:255|unique:kelas,kode',
            'kelas' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'rombel' => 'required|max:255',
        ]);
        Kelas::create($validatedData);
        return redirect('/kurikulum/data_kelas')->with('sukses','Data Berhasil Ditambah');
    }
    // Edit Data Kelas
    public function edit_kelas(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/kurikulum/data_kelas')->with('sukses', 'Data Berhasil Diupdate');
    }
    // Hapus Data Kelas
    public function hapus_kelas($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete($id);
        return redirect('/kurikulum/data_kelas')
        ->with('sukses', 'Data Berhasil Dihapus');
    }


    // Import Excel
    public function siswaImport(Request $request)
    {   
        try {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        // import data
        Excel::import(new SiswaImport, public_path('/file_siswa/' . $nama_file));

            } catch (\Illuminate\Database\QueryException $exception) {
                 if ($exception->errorInfo[1] == 1062) {
                     // Kode 1062 menunjukkan adanya duplikat data di database.
                     return redirect()->back()->with('error', 'Data Sudah Tersedia!');
            } else {
                // Tangani error lain yang terjadi.
                return redirect()->back()->with('error', 'Terjadi kesalahan!');
            }
            }

        // alihkan halaman kembali
        return redirect()->back()->with('sukses', 'Data Berhasil Diimport');
    }

    public function guruImport(Request $request)
    {   
        try {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_guru', $nama_file);

        // import data
        Excel::import(new GuruImport, public_path('/file_guru/' . $nama_file));
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
        return redirect()->back()->with('sukses', 'Data Berhasil Diimport');
    }

    public function mapelImport(Request $request)
    {   
        try {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_mapel', $nama_file);

        // import data
        Excel::import(new MapelImport, public_path('/file_mapel/' . $nama_file));
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
        return redirect()->back()->with('sukses', 'Berhasil Diimport');
    }
    

    public function kelasImport(Request $request)
    {   
        try {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_kelas', $nama_file);

        // import data
        Excel::import(new KelasImport, public_path('/file_kelas/' . $nama_file));
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
        return redirect()->back()->with('sukses', 'Berhasil Diimport');
    }
}

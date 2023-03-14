<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WakelController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KomponenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Rute Backup Database */
Route::get('/backup', [KurikulumController::class, 'backup']);

/* Rute Login */

Route::group(['middleware' => 'prevent-back-history'], function () {
    /* Rute Homepage */
    Route::get('/', function () {
        return view('landing-page.index', [
            'title' => 'Raport Diagnostik'
        ]);
    });

    /* Rute Login */
    Route::get('/login', [LoginController::class, 'viewlogin'])
    ->middleware('guest:guru,siswa')->name('login');
    Route::post('/postlogin', [LoginController::class, 'postlogin'])
    ->name('postlogin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    /* Rute Kurikulum */
    Route::middleware(['auth:guru', 'ceklevel:Kurikulum'])->group(function () {
        // Predikat Siswa
        Route::get('/kurikulum/kelas_siswa/predikatsiswaA', [KurikulumController::class, 'siswapredikat_a']);
        Route::get('/kurikulum/kelas_siswa/predikatsiswaB', [KurikulumController::class, 'siswapredikat_b']);
        Route::get('/kurikulum/kelas_siswa/predikatsiswaC', [KurikulumController::class, 'siswapredikat_c']);
        // Index
        Route::get('/kurikulum', [KurikulumController::class, 'dashboard']);
        // Cetak PDF
        Route::get('/kurikulum/kelas_siswa/{kode}/{siswa:nis}/pdf', 
            [KurikulumController::class, 'cetak'])->name('cetakRaport');
        // Siswa
        Route::post('/data_siswa_import', [KurikulumController::class, 
            'siswaImport']);
        Route::get('/kurikulum/kelas_siswa', [KurikulumController::class, 
            'kelas_siswa']);
        Route::get('/kurikulum/kelas_siswa/{kode}/data_siswa', [KurikulumController::class, 'data_siswa']);
        Route::post('/kurikulum/{kode}/tambah_siswa', [KurikulumController::class, 'tambah_siswa']);
        Route::post('/kurikulum/kelas_siswa/{kode}/tahun_siswa', [KurikulumController::class, 'tahun_siswa']);
        Route::post('/kurikulum/{kode}/{nis}/edit_siswa', [KurikulumController::class, 'edit_siswa']);
        Route::post('/kurikulum/{kode}/{nis}/hapus_siswa', [KurikulumController::class, 'hapus_siswa']);
        // Guru
        Route::post('/data_guru_import', [KurikulumController::class, 'guruImport']);
        Route::get('/kurikulum/data_guru', [KurikulumController::class, 
            'data_guru']);
        Route::get('/kurikulum/data_guru/detail_{id}', [KurikulumController::class, 'detail_guru']);
        Route::post('/kurikulum/data_guru/tambahtransaksi_{nip}', [KurikulumController::class, 'tambah_transaksi']);
        Route::post('/kurikulum/data_guru/tambahwakel_{nip}', [ KurikulumController::class, 'tambah_wakel']);
        Route::post('/kurikulum/data_guru/editwakel_{nip}', [ KurikulumController::class, 'edit_wakel']);
        Route::post('/kurikulum/data_guru/hapuswakel_{nip}', [ KurikulumController::class, 'hapus_wakel']);
        Route::post('/kurikulum/data_guru/edittransaksi_{id}', [KurikulumController::class, 'edit_transaksi']);
        Route::post('/kurikulum/data_guru/hapustransaksi_{id}', [KurikulumController::class, 'hapus_transaksi']);
        Route::post('/kurikulum/tambah_guru', [KurikulumController::class, 
            'tambah_guru']);
        Route::post('/kurikulum/{nip}/edit_guru', [KurikulumController::class, 'edit_guru']);
        Route::post('/kurikulum/{nip}/hapus_guru', [KurikulumController::class, 'hapus_guru']);
        // Matapelajaran
        Route::post('/data_mapel_import', [KurikulumController::class, 
            'mapelImport']);
        Route::get('/kurikulum/data_mapel', [KurikulumController::class, 
            'data_mapel']);
        Route::post('/kurikulum/tambah_mapel', [KurikulumController::class, 
            'tambah_mapel']);
        Route::post('/kurikulum/{kode}/edit_mapel', [KurikulumController::class, 
            'edit_mapel']);
        Route::post('/kurikulum/{kode}/hapus_mapel', [KurikulumController::class, 'hapus_mapel']);
        // Kelas
        Route::post('/data_kelas_import', [KurikulumController::class, 
            'kelasImport']);
        Route::get('/kurikulum/data_kelas', [KurikulumController::class, 
            'data_kelas']);
        Route::post('/kurikulum/tambah_kelas', [KurikulumController::class, 
            'tambah_kelas']);
        Route::post('/kurikulum/{kode}/edit_kelas', [KurikulumController::class,
         'edit_kelas']);
        Route::post('/kurikulum/{kode}/hapus_kelas', [KurikulumController::class, 'hapus_kelas']);
        // Raport
        Route::get('/kurikulum/kelas_siswa/{kode}/{siswa:nis}', [KurikulumController::class, 'raport'])->name('kurikulum.siswa');
    }); //End

    /* Rute Siswa */
    Route::middleware(['auth:siswa'])->group(function () {
        // Index
        Route::get('/siswa', [SiswaController::class, 'dashboard']);
        // Raport
        Route::get('/siswa/raport{siswa:nis}', [SiswaController::class, 
            'raport']);
    });


    // User Guide
Route::get('/UserGuide', function (){
    return view('landing-page.userguide');
});

    /* Rute Walikelas */
    Route::middleware(['auth:guru', 'ceklevel:Guru'])->group(function () {
        // Index
        Route::get('/wakel', [WakelController::class, 'dashboard']);
        // Kelas
        Route::get('/wakel/kelas', [WakelController::class, 'dashboard']);
        // Siswa
        Route::get('/wakel/kelas_siswa', [WakelController::class, 
            'kelas_siswa']);
        Route::get('/wakel/kelas_siswa/{kode}/data_siswa', [WakelController::class, 'data_siswa']);
        Route::get('/wakel/kelas_siswa/{kode_kelas}/{siswa:nis}', [WakelController::class, 'raport']);
        // Guru
        Route::get('/wakel/kelas_guru', [WakelController::class, 
            'kelas_guru']);
        Route::get('/wakel/kelas_guru/{kode}/data_guru', [WakelController::class, 'data_guru']);
        Route::post('/wakel/{kode}/tahun_siswa', [WakelController::class, 
            'tahun_siswa']);
        Route::get('/wakel/kelas_guru/data_guru/detail_{nip}', 
            [WakelController::class, 'detail']);
    });


    /* Rute Guru */
    Route::middleware(['auth:guru', 'ceklevel:Guru'])->group(function () {
        // Index
        Route::get('/guru', [GuruController::class, 'dashboard']);
        // Komponen
        Route::get('/guru/mapel_komponen', [GuruController::class, 
            'mapel_komponen']);
        Route::get('/guru/mapel_komponen/{kode}/komponen', [GuruController::class, 'komponen']);
        Route::post('/guru/tambah_komponen', [GuruController::class, 
            'proses_komponen']);
        Route::post('/guru/{id}/edit_komponen', [GuruController::class, 
            'edit_komponen']);
        Route::post('/guru/{id}/hapus_komponen', [GuruController::class, 
            'hapus_komponen']);
        // Siswa
        Route::get('/guru/kelas_siswa', [GuruController::class, 'data_kelas']);
        Route::get('/guru/kelas_siswa/{kode}/mapel', [GuruController::class, 
            'kelas_siswa']);
        Route::get('/guru/kelas_siswa/{kode_kelas}/{kode_mapel}/siswa', [GuruController::class, 'data_siswa']);
        Route::get('/guru/aktivitas', [GuruController::class, 'aktivitas']);
        // Setiap {{kode}} mewakili sesuai urutan url dan url yang didapat dari data looping
        // Penilaian
        Route::get('/guru/kelas_siswa/{kode_kelas}/{kode_mapel}/{nis}/penilaian', [GuruController::class, 'penilaian']);
        Route::post('/guru/{kode_mapel}/{siswa:nis}/penilaian', [GuruController::class, 'proses_nilai']);
        Route::post('/guru/edit_nilai/{id}', [GuruController::class, 
            'edit_nilai']);
        Route::post('/guru/hapus_nilai/{id}', [GuruController::class, 
            'hapus_nilai']);
        // Rekapitulasi Nilai
        Route::get('/guru/kelas_siswa/{kelas}/{mapel}/{nis}', [GuruController::class, 'rekap']);
        // Aktivitas Guru
        Route::get('/guru/aktivitas/detail_{nip}', [GuruController::class, 'detail']);
    });
});

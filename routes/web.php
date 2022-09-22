<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubinController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\PerusahaanController;

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

/* Route Hubin */
Route::get('/', function () {
    return view('welcome', [
        "title" =>  "Dashboard | Hubin",
        "titleheader" =>  "Dashboard"
    ]);
});
Route::get('/hubin/perusahaan', [HubinController::class, 'hubinperusahaan'])->name('hubinperusahaan');
Route::get('/hubin/editakunsiswa', [HubinController::class, 'hubineditakunsiswa'])->name('hubineditakunsiswa');
Route::get('/hubin/pemetaan', [HubinController::class, 'hubinpemetaan'])->name('hubinpemetaan');
Route::get('/hubin/siswaterdaftar', [HubinController::class, 'siswaterdaftarhubin'])->name('siswaterdaftarhubin');
Route::get('/hubin/siswa', [HubinController::class, 'daftarsiswahubin'])->name('daftarsiswahubin');



/* Route Siswa */
Route::get('/siswa/jurnal', [SiswaController::class, 'jurnalsiswa'])->name('jurnalsiswa');
Route::get('/siswa/sikap', [SiswaController::class, 'sikapsiswa'])->name('sikapsiswa');
Route::get('/siswa/daftarpkl', [SiswaController::class, 'daftarindustrisiswa'])->name('daftarindustrisiswa');
Route::get('/siswa/profil', [SiswaController::class, 'profilsiswa'])->name('profilsiswa');

/* Route Pembimbing Perusahaan */
Route::get('/pembimbingperusahaan', [PerusahaanController::class, 'pembimbingperusahaan'])->name('pembimbingperusahaan');




/* Route Pembimbing Sekolah */
Route::get('/evaluasipkl', [SekolahController::class, 'evaluasipkl'])->name('evaluasipkl');


// Route::get('/hubin/perusahaan', [HubinController::class, 'index']);

/*Route Login*/
Route::get('/login', [LoginController::class, 'viewlogin'])->name('viewlogin');

Route::get('/importdata', function(){
    return view('hubin.upload');
});
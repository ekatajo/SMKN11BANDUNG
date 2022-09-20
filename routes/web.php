<?php

use App\Http\Controllers\HubinController;
use Illuminate\Support\Facades\Route;

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
    return view('index', [
        "title" =>  "Dashboard | Hubin",
        "titleheader" =>  "Hubin"
    ]);
});

Route::get('/hubin/perusahaan', function () {
    return view('perusahaanhubin', [
        "title" =>  "Hubin | Daftar Perusahaan",
        "titleheader" =>  "Daftar Perusahaan"
    ]);
});

Route::get('/hubin/editakunsiswa', function () {
    return view('editakunsiswa', [
        "title" =>  "Hubin | Edit Akun Siswa",
        "titleheader" =>  "Edit Akun Siswa"
    ]);
});
Route::get('/hubin/pemetaan', function () {
    return view('pemetaanpkl', [
        "title" =>  "Hubin | Pemetaan PKL",
        "titleheader" =>  "Pemetaan PKL"
    ]);
});

Route::get('/hubin/siswaterdaftarhubin', function () {
    return view('siswaterdaftarhubin', [
        "title" =>  "Hubin | Siswa Terdaftar",
        "titleheader" =>  "Siswa Terdaftar"
    ]);
});

Route::get('/hubin/siswa', function () {
    return view('daftarsiswahubin', [
        "title" =>  "Hubin | Daftar Siswa",
        "titleheader" =>  "Daftar Siswa"
    ]);
});
/* Route Siswa */
Route::get('/siswa/jurnal', function () {
    return view('jurnalsiswa', [
        "title" =>  "Jurnal Siswa",
        "titleheader" =>  "Jurnal Siswa"
    ]);
});

Route::get('/siswa/sikap', function () {
    return view('sikapsiswa', [
        "title" =>  "Siswa | Nilai Sikap",
        "titleheader" =>  "Nilai Sikap"
    ]);
});

/* Route Pembimbing Perusahaan */
Route::get('/pembimbingperusahaan', function () {
    return view('pembimbing-perusahaan', [
        "title" =>  "Dashboard | Pembimbing Perusahaan",
        "titleheader" =>  "Dashboard"
    ]);
});



/* Route Pembimbing Sekolah */
Route::get('/evaluasipkl', function () {
    return view('evaluasipkl', [
        "title" =>  "Evaluasi PKL",
        "titleheader" =>  "Evaluasi PKL"
    ]);
});

// Route::get('/hubin/perusahaan', [HubinController::class, 'index']);

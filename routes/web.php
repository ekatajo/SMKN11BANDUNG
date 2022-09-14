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

Route::get('/', function () {
    return view('index', [
        "title" =>  "Dashboard | Hubin",
        "titleheader" =>  "Hubin"
    ]);
});

Route::get('/hubin/perusahaan', function () {
    return view('perusahaanhubin', [
        "title" =>  "Dashboard | Hubin Perusahaan",
        "titleheader" =>  "Daftar Perusahaan"
    ]);
});

Route::get('/siswa', function () {
    return view('jurnalsiswa', [
        "title" =>  "Dashboard | Jurnal Siswa",
        "titleheader" =>  "Jurnal Siswa"
    ]);
});

Route::get('/pembimbingperusahaan', function () {
    return view('pembimbing-perusahaan', [
        "title" =>  "Dashboard | Jurnal Siswa",
        "titleheader" =>  "Jurnal Siswa"
    ]);
});

Route::get('/sikapsiswa', function () {
    return view('sikapsiswa', [
        "title" =>  "Dashboard | Jurnal Siswa",
        "titleheader" =>  "Jurnal Siswa"
    ]);
});

Route::get('/pemetaanpkl', function () {
    return view('pemetaanpkl', [
        "title" =>  "Dashboard | Jurnal Siswa",
        "titleheader" =>  "Jurnal Siswa"
    ]);
});

// Route::get('/hubin/perusahaan', [HubinController::class, 'index']);

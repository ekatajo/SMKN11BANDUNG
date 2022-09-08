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
        "titleheader" =>  "Hubin"
    ]);
});

Route::get('/hubin/perusahaan', function () {
    return view('perusahaanhubin', [
        "titleheader" =>  "Daftar Perusahaan"
    ]);
});

// Route::get('/hubin/perusahaan', [HubinController::class, 'index']);

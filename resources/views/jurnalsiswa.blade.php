@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center judul1 mt-4 mb-5">Laporan Kegiatan Harian Peserta Didik</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid container2" style="border-radius: 16px;">
                    <div class="container">
                      <div class="row">
                        <div class="col-5">
                            <img class="ml-5 mt-5" src="{{ asset('assets/img/avatar-siswa.png') }}" alt="">
                        </div>
                        <div class="col" style="color: black; font-weight:600;">
                            <p>Nama: <span>Galang Yudha Ilham</span></p>
                            <p>Keahlian: <span>Rekayasa Perangkat Lunak</span></p>
                            <p>Tahun Pelajaran: <span>2023</span></p>
                            <p>Tempat Prakerin: <span>PT. Maju Mundur</span></p>
                            <p>Nama Pembimbing PKL: <span>Saipul Jamil</span></p>
                            <p>Jabatan: <span>Pembimbing</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table>
                    <thead>
                      <tr class="tab-head">
                        <th scope="col">No.</th>
                        <th scope="col">Ativitas PKL</th>
                        <th scope="col">Hari/Tgl Pelaksanaan</th>
                        <th scope="col">Divisi/Dept</th>
                        <th scope="col">Mulai Pukul</th>
                        <th scope="col">Selesai Pukul</th>
                        <th scope="col">Catatan Pembimbing</th>
                        <th scope="col">Paraf Pembimbing</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Account">Visa - 3412</td>
                        <td data-label="Due Date">04/01/2016</td>
                        <td data-label="Amount">$1,190</td>
                        <td data-label="Period">03/01/2016 - 03/31/2016</td>
                      </tr>
                      <tr>
                        <td scope="row" data-label="Account">Visa - 6076</td>
                        <td data-label="Due Date">03/01/2016</td>
                        <td data-label="Amount">$2,443</td>
                        <td data-label="Period">02/01/2016 - 02/29/2016</td>
                      </tr>
                      <tr>
                        <td scope="row" data-label="Account">Corporate AMEX</td>
                        <td data-label="Due Date">03/01/2016</td>
                        <td data-label="Amount">$1,181</td>
                        <td data-label="Period">02/01/2016 - 02/29/2016</td>
                      </tr>
                      <tr>
                        <td scope="row" data-label="Acount">Visa - 3412</td>
                        <td data-label="Due Date">02/01/2016</td>
                        <td data-label="Amount">$842</td>
                        <td data-label="Period">01/01/2016 - 01/31/2016</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="nilai-rata">
                    <span>NA = (Nilai Rata Rata 1,2,3) x 80% + (Nilai Laporan PKL) x 20%</span>
                </div>
            </div>
        </div>
    </div>
@endsection
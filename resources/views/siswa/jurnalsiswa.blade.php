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
                        <div class="col-6" style="padding-left:90px;">
                            <img class="ml-5 mt-3 avatar" src="{{ asset('assets/img/avatar-siswa.png') }}" alt="">
                        </div>
                        <div class="col mb-5" style="color: black; font-weight:600;">
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
        <div class="row mt-5">
            <div class="col">
                <table style="margin-bottom:70px;">
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
                        <td data-label="no">1</td>
                        <td data-label="aktivitas">mengisi jurnal</td>
                        <td data-label="tanggal">04/01/2016</td>
                        <td data-label="divisi">IT</td>
                        <td data-tabel="mulai">09.00</td>
                        <td data-tabel="selesai">16.30</td>
                      </tr>
                      <tr>
                        <td scope="row" data-label="Account">2</td>
                        <td data-label="aktivitas">mengisi jurnal</td>
                        <td data-label="tanggal">04/01/2016</td>
                        <td data-label="divisi">IT</td>
                        <td data-tabel="mulai">09.00</td>
                        <td data-tabel="selesai">16.30</td>
                      </tr>
                      <tr>
                        <td scope="row" data-label="Account">3</td>
                        <td data-label="aktivitas">mengisi jurnal</td>
                        <td data-label="tanggal">03/01/2016</td>
                        <td data-label="divisi">IT</td>
                        <td data-tabel="mulai">09.00</td>
                        <td data-tabel="selesai">16.30</td>
                      </tr>
                      <tr>
                        <td scope="row" data-label="Acount">4</td>
                        <td data-label="aktivitas">mengisi jurnal</td>
                        <td data-label="tanggal">02/01/2016</td>
                        <td data-label="divisi">IT</td>
                        <td data-tabel="mulai">09.00</td>
                        <td data-tabel="selesai">16.30</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        {{-- <div class="row mt-4">
            <div class="col">
                <div class="nilai-rata">
                    <span>NA = (Nilai Rata Rata 1,2,3) x 80% + (Nilai Laporan PKL) x 20%</span>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
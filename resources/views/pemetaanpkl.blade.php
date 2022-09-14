@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center judul1 mt-4 mb-5">Pemetaan Kompetensi Dasar Dalam Kegiatan PKL</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid container2" style="border-radius: 16px;">
                    <div class="container">
                      <div class="row">

                        <div class="col mb-5" style="color: black; font-weight:600;">
                            <p>Nama Dunia Kerja: <span></span></p>
                            <p>Nama Sekolah: <span></span></p>
                            <p>Bidang Keahlian: <span></span></p>
                            <p>Program Keahlian: <span></span></p>
                            <p>Kompetensi Keahlian: <span></span></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table>
                    <thead>
                      <tr class="tab-head">
                        <th scope="col">No.</th>
                        <th scope="col">Kompetensi Dasar</th>
                        <th scope="col">Materi Pokok</th>
                        <th scope="col">Pelaksanaan Pembelajaran di Sekolah</th>
                        <th scope="col">Pelaksanaan Pembelajaran di Dunia Kerja</th>
                        <th scope="col">Indikator Keberhasilan PKL</th>
                        <th scope="col">Catatan</th>
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
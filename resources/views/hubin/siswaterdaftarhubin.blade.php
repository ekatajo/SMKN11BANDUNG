@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <img src="{{ asset('assets/img/Circle_Arrow_Left.svg') }}" alt="" style="width: 7%;">
        </div>
        <section>
            <div class="content-body">
                <div class="container mb-5">
                    <div class="card">
                        <p class="mt-4 ml-5" style="color:black; font-weight:700;">Semua Murid</p> 
                        <div class="dropdown">
                            <div class="row">
                                <div class="col-8">
                                </div>
                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                              Periode
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item" type="button">Januari-Juni</button>
                              <button class="dropdown-item" type="button">Juni-Desember</button>
                            </div>
                          <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                Tahun
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item" type="button">2022</button>
                              <button class="dropdown-item" type="button">2023</button>
                              <button class="dropdown-item" type="button">2024</button>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                              Divisi
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item" type="button">IT</button>
                              <button class="dropdown-item" type="button">Marketing</button>
                            </div>
                        </div>
                          </div>
                        <table class="tabelperusahaan mb-5 mt-3">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Nama Perusahaan</th>
                                <th>Jurusan</th>
                                <th>Divisi</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Dadang</td>
                                <td>XII - RPL 1</td>
                                <td>PT SCOLA LMS</td>
                                <td>Rekayasa Perangkat Lunak</td>
                                <td>IT</td>
                            </tr>
                           <tr>
                                <td>2</td>
                                <td>Diding</td>
                                <td>XII - RPL 2</td>
                                <td>PT CHLORINE DIGITAL MEDIA</td>
                                <td>Multimedia</td>
                                <td>IT</td>
                           </tr>
                           <tr>
                                <td>3</td>
                                <td>Dudung</td>
                                <td>XII - RPL 1</td>
                                <td>PT TITIK TERANG</td>
                                <td>Teknik Komputer Jaringan</td>
                                <td>IT</td>
                           </tr>
                           <tr>
                            <td>4</td>
                            <td>Dedeng</td>
                            <td>XII - RPL 2</td>
                            <td>PT TITIK TERANG</td>
                            <td>Teknik Kumputer Jaringan</td>
                            <td>IT</td>
                       </tr>
                       <tr>
                        <td>5</td>
                        <td>Dodong</td>
                        <td>XII - RPL 1</td>
                        <td>PT SCOLA LMS</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>IT</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Bambang</td>
                        <td>XII - RPL 1</td>
                        <td>PT CHLORINE DIGITAL MEDIA</td>
                        <td>Bisnis Daring dan Pemasaran</td>
                        <td>IT</td>
                   </tr>
                   <tr>
                    <td>7</td>
                    <td>Bimbing</td>
                    <td>XII - RPL 2</td>
                    <td>PT CHLORINE DIGITAL MEDIA</td>
                    <td>Multimedia</td>
                    <td>IT</td>
               </tr>
               <tr>
                <td>8</td>
                <td>Bembeng</td>
                <td>XII - RPL 2</td>
                <td>PT SCOLA LMS</td>
                <td>Rekayasa Perangkat Lunak</td>
                <td>IT</td>
           </tr>
                        </table>
                        <hr>
                        <p class="teks1">Rows per page: <span class=""> 8 <i class="fa-solid fa-caret-down"></i><span class="teks1 ml-4">1-8 of 1240</span><span><i class="fa-solid fa-chevron-left mr-3"></i><i class="fa-solid fa-chevron-right"></i> </span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
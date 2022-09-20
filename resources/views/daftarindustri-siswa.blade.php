@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
              <thead>
                <tr style="background-color: #DADADC; border-radius:30px;">
                  <th scope="col">Nama Perusahaan</th>
                  <th scope="col">Kuota Tersisa</th>
                  <th scope="col">Jurusan yang dibutuhkan</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PT Scola LMS</td>
                  <td>4</td>
                  <td>RPL</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pt+scola+lms/@-6.8998896,107.5613081,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e62e58fa397f:0xf1fb51ac24b815ee!2m2!1d107.593259!2d-6.884532?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
                <tr>
                  <td>PT Chlorine Digital Media</td>
                  <td>6</td>
                  <td>RPL,MM</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pt+chlorine+digital+media/@-6.9011401,107.5375177,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e98c564bbf67:0xdd763cba46ed36c1!2m2!1d107.6061961!2d-6.9111736?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
                <tr>
                  <td>Pemkot Cimahi</td>
                  <td>8</td>
                  <td>OTKP, AKL</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pemkot+cimahi/@-6.8879752,107.5400105,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e43e58669445:0x39dac7b253b18ac4!2m2!1d107.5543687!2d-6.8710469?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
                <tr>
                  <td>PT Titik Terang</td>
                  <td>4</td>
                  <td>RPL</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pt+scola+lms/@-6.8998896,107.5613081,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e62e58fa397f:0xf1fb51ac24b815ee!2m2!1d107.593259!2d-6.884532?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
                <tr>
                  <td>BNI</td>
                  <td>4</td>
                  <td>AKL</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pt+chlorine+digital+media/@-6.9011401,107.5375177,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e98c564bbf67:0xdd763cba46ed36c1!2m2!1d107.6061961!2d-6.9111736?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
                <tr>
                  <td>Pos Indonesia</td>
                  <td>6</td>
                  <td>OTKP, MLOG</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pemkot+cimahi/@-6.8879752,107.5400105,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e43e58669445:0x39dac7b253b18ac4!2m2!1d107.5543687!2d-6.8710469?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
                <tr>
                  <td>Yogya Group</td>
                  <td>6</td>
                  <td>BDP</td>
                    <td> <a href="https://www.google.com/maps/dir/-6.8991215,107.5623504/pemkot+cimahi/@-6.8879752,107.5400105,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e68e43e58669445:0x39dac7b253b18ac4!2m2!1d107.5543687!2d-6.8710469?hl=id">
                        <button class="buttonmaps">maps <i class="fa-solid fa-arrow-right ml-1"></i></button></a> 
                    </td>
                    <td><button class="buttonmaps">daftar</button></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
@endsection
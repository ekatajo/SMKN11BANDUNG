@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
              <thead>
                <tr>
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
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>PT Chlorine Digital Media</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>Pemkot Cimahi</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
@endsection
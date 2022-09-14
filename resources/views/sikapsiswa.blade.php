@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center judul1 mt-4 mb-2">Penilaian PKL</p>
                <p class="text-center judul1 mt-2 mb-5">(Pengetahuan, Sikap, Keterampilan)</p>
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
                            <p>Kelas: <span>XII - RPL 2</span></p>
                            <p>Semester: <span>5</span></p>
                            <p>Kompetensi Keahlian: <span>Rekayasa Perangkat Lunak</span></p>
                            <p>Nama Pembimbing PKL: <span>Saipul Jamil</span></p>
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
                        <th scope="col">Kompeten Penilaian</th>
                        <th scope="col">Skor (0-100)</th>
                        <th scope="col">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                        <td data-label="no">1</td>
                        <td data-label="Kompeten">Aspek Sikap</td>
                        <td data-label="Skor"></td>
                        <td data-label="Keterangan"></td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">a. Penampilan dan kerapihan pakaian</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">b. Komitmen dan integritas</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">c. Menghargai dan menghormati (kesopanan)</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">d. Kreativitas</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">e.Kerja sama tim</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">f. Disiplin dan tanggung jawab</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no">2</td>
                        <td data-label="Kompeten">Aspek Pengetahuan</td>
                        <td data-label="Skor"></td>
                        <td data-label="Keterangan"></td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">a. Penguasaan keilmuan</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">b. Kemampuan mengidentifikasi masalah</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">c. Produktivitas dan penyelesaian tugas</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no">3</td>
                        <td data-label="Kompeten">Aspek Keterampilan</td>
                        <td data-label="Skor"></td>
                        <td data-label="Keterangan"></td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">a. Keahlian dan keterampilan</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">b. Inovasi dan kreativitas</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">c. Produktivitas dan penyelesaian tugas</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">d. Penguasaan alat kerja</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">Nilai Rata-rata Nilai 1, 2, & 3 (80%)</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no">4</td>
                        <td data-label="Kompeten">Nilai Laporan PKL (20%)</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
                      </tr>
                      <tr>
                        <td data-label="no"></td>
                        <td data-label="Kompeten">Nilai Akhir  PKL</td>
                        <td data-label="Skor">95</td>
                        <td data-label="Keterangan">-</td>
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
@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center judul1 mt-4 mb-5">Evaluasi PKL</p>
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
                            <p>Nama Industri: <span>PT. Maju Mundur</span></p>
                            <p>Alamat Industri: <span>Jl.Budi Cilember</span></p>
                            <p>Waktu PKL: <span>Januari-Juni</span></p>
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
                        <th scope="col">Monitoring</th>
                        <th scope="col">Evaluasi</th>
                        <th scope="col">Ya</th>
                        <th scope="col">Tidak</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="no">1</td>
                        <td data-label="Monitoring">Terdapat presensi kehadiran peserta didik</td>
                        <td data-label="Evaluasi">Peserta didik dan pembimbing industri melaksanakan program PKL</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">2</td>
                        <td data-label="Monitoring">Peserta didik mengikuti SOP yang ada di dunia kerja</td>
                        <td data-label="Evaluasi">Materi PKL yang diikuti peserta didik sesuai dengan hasil penepatan kompetensi dan program PKL</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">3</td>
                        <td data-label="Monitoring">Peserta didik mengisi jurnal</td>
                        <td data-label="Evaluasi"></td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">4</td>
                        <td data-label="Monitoring">Peserta didik membuat portofolio sesuai dengan kegiatan jurnal kegiatan</td>
                        <td data-label="Evaluasi"></td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">5</td>
                        <td data-label="Monitoring"></td>
                        <td data-label="Evaluasi">Pembelajaran PKL di Industri Pasangan/Industri menambah wawasan dan pengalaman nyata peserta didik dalam dunia kerja</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">6</td>
                        <td data-label="Monitoring"></td>
                        <td data-label="Evaluasi">Pembelajaran PKL di Industri Pasangan/Industri menambah keterampilan peserta didik sesuai program keahlian.</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">7</td>
                        <td data-label="Monitoring"></td>
                        <td data-label="Evaluasi">Pembelajaran PKL di Industri Pasangan/Industri menambah pengetahuan peserta didik sesuai program keahlian.</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">8</td>
                        <td data-label="Monitoring"></td>
                        <td data-label="Evaluasi">Pembelajaran PKL di Industri Pasangan/Industri menambah nilai-nilai disiplin, kerja keras, dan tanggung jawab.</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">9</td>
                        <td data-label="Monitoring"></td>
                        <td data-label="Evaluasi">Pembimbing selama pembelajaran PKL di Industri Pasangan/Industri, berperan dengan baik.</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
                      </tr>
                      <tr>
                        <td data-label="no">10</td>
                        <td data-label="Monitoring"></td>
                        <td data-label="Evaluasi">Selama pembelajaran di Industri Pasangan/Industri peserta didik mengalami hambatan-hambatan yang sangat berani.</td>
                        <td data-label="Ya"></td>
                        <td data-tabel="Tidak"></td>
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
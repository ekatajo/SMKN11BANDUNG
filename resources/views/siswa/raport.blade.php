@extends('siswa.template.main')
@section('content')
    <div class="container">
<div class="card mt-3 mb-5">
  <div class="card-body">
    <h6 class="text-center mt-3" style="color:black;"><b>PEMERINTAH DAERAH PROVINSI JAWA BARAT DINAS PENDIDIKAN</b></h6>
    <br>
    <h4 class="text-center" style="color:black;"><b>SMK NEGERI 11 BANDUNG</b></h4>
    <hr style="border: 1px solid black;">
    <h5 class="text-center" style="color:black;"><b>LAPORAN HASIL PENACAPAIAN KOMPETENSI PESERTA DIDIK</b></h5>
    <div class="row mt-5">
              <div class="col-2">
                <p class="mb-0">Nama Peserta Didik</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->nama }}</p>
              </div>
            </div>
    <div class="row">
              <div class="col-2">
                <p class="mb-0">NIS/NISN</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->nis }}</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Kelas</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->kode_kelas }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Semester</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">1</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Tahun Pelajaran</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{$siswa->tahun}}</p>
              </div>
            </div>
            <br>
     <table class="table mt-3">
                        @foreach ($mapel as $mapel)
                            <tr>
                                <th style="text-align:center; color:black;" colspan="5"><b>{{ $mapel->nama }}</b></th>
                            </tr>
                            <tr>
                                <td colspan="1">No</td>
                                <td colspan="1">Komponen</td>
                                <td>Nilai</td>
                                <td>Predikat</td>
                                <td>Deskripsi</td>
                            </tr>
                            <tr>
                                @php $no = 1; @endphp
                                @foreach ($mapel->komponen as $komponen)
                                    <tr class="table table-bordered">
                                        <td style="width: 50px">{{ $no++ }}</td>
                                        <td>
                                            {{ $komponen->nama }}
                                        </td>
                                        <td>
                                            {{ $komponen->nilai ? $komponen->nilai[0]->nilai : "" }}
                                        </td>
                                        <td>
                                            {{ $komponen->nilai ? $komponen->nilai[0]->predikat : "" }}
                                        </td>
                                        <td>
                                            {{ $komponen->nilai ? $komponen->nilai[0]->keterangan : "" }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
  </div>
</div>
</div>
@endsection
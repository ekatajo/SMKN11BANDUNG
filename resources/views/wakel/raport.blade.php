@extends('wakel.template.main')
@section('content')

    <div class="container">
            <div class="card shadow">
                    <div class="card-body">
<div class="row">
        <div class="col-md-5">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $siswa->nama }}</span><span class="text-black-50">{{ $siswa->email }}</span><span> </span></div>
        </div>
        <div class="col-md-7">
            <div class="p-3 py-5">
               <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: #682773;">Biodata Siswa</h4>
                </div>
                <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nomor Induk Siswa</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->nis }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->nama }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Jenis Kelamin</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->gender }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->alamat }}, {{ $siswa->kecamatan }}, {{ $siswa->kota }}</p>
              </div>
                </div>
                <hr>
                 <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Kode Pos</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->kodepos }}</p>
              </div>
            </div>
            <hr>
             <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $siswa->username }}</p>
              </div>
            </div>
                </div>
            </div>
</div>
</div>
                </div>
            </div>
            <hr style=" border-top: 1px dashed;">
<div class="card shadow mt-3 mb-5">
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
                <p class="mb-0">Nomor Induk Siswa</p>
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
                <p class="text-muted mb-0">{{ $kelas->kelas }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Jurusan</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $kelas->jurusan }}</p>
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
                <p class="text-muted mb-0">{{ $siswa->tahun }}</p>
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

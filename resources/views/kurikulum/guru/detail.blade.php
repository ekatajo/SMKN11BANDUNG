@extends('kurikulum.template.main')

@section('content')

<div class="container">

    {{-- notifikasi sukses --}}
    @if ($sukses = Session::get('sukses'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $sukses }}</strong>
    </div>
    @endif

    @if ($ada = Session::get('kelas-ada'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $ada }}</strong>
  </div>
  @endif

<div class="card shadow mb-4 mt-3">
      <div class="card-body">
   
    <div class="row">
         <div class="col-md-3">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $guru->nama }}</span><span class="text-black-50">{{ $guru->email }}</span><span> </span></div>
        </div>
        <div class="col-md-9">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"  style="color: #682773;">Biodata</h4>
                </div>
                <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Nomor Induk Pegawai</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->nip }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->nama }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Jenis Kelamin</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->gender }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->alamat }}, {{ $guru->kecamatan }}, {{ $guru->kota }}</p>
              </div>
                </div>
                <hr>
                 <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Kode Pos</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->kodepos }}</p>
              </div>
            </div>
            <hr>
             <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->username }}</p>
              </div>   
            </div>
            <hr>
             <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Sebagai</p>
              </div>
              <div class="col-sm-5">
                <p class="text-muted mb-0">{{ $guru->level }}</p>
              </div>
              
            </div>
            <hr>
            @if($guru->level == "Guru")
            <div class="row">
              <div class="col-sm-5">
                <p class="mb-0">Walikelas
                    @if (!empty($walikelas->kode_kelas))  
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-circle btn-sm ml-1" data-toggle="modal" data-target="#editWakel">
                      <i class="fa-solid fa-pen-to-square"></i></i>
                    </button>
                        <button type="button" class="btn btn-danger btn-circle btn-sm ml-1" data-toggle="modal" data-target="#hapusWakel">
                      <i class="fa-solid fa-trash-can"></i>
                    </button>
 <div class="modal fade" id="editWakel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="/kurikulum/data_guru/editwakel_{{$guru->nip}}">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Walikelas</h5>
                        </div>
                        <div class="modal-body">
                            @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label" hidden>Nomor Induk Pegawai</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Pegawai" name="nip" value="{{$guru->nip}}" required hidden>
                        </div>
                      </div>
                        

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Kelas</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="kode_kelas">
                                @if(count($kelas)>0)
                                @foreach($kelas as $k)
                                  <option value="{{$k->kode}}" selected>{{ $k->kode }} - {{ $k->jurusan }}</option>
                                @endforeach
                                @else
                                <option selected>Tidak ada data</option>
                                @endif
                              </select>
                            </div>
                          </div>  

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

      </div>

                    <div class="modal fade" id="hapusWakel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/kurikulum/data_guru/hapuswakel_{{$guru->nip}}">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin akan hapus?</h5>
            </div>
            <div class="modal-body">
              @csrf
              Tekan "Simpan" untuk melanjutkan proses Anda saat ini.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
                      @elseif (empty($walikelas->kode_kelas)) 
                    <button type="button" class="btn btn-primary btn-circle btn-sm ml-1" data-toggle="modal" data-target="#tambahWakel">
                      <i class="fa-solid fa-square-plus fa-lg"></i>
                    </button>
                      @endif
                </p>
              </div>
              @endif
              <div class="col-sm-5">
                <p class="text-muted mb-0">  
                  {{ $walikelas?->kelas->kode }} - {{ $walikelas?->kelas->jurusan }}
              </div>
            </div>
            </div>
        
        <!-- Walikelas -->
                <div class="modal fade" id="tambahWakel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="/kurikulum/data_guru/tambahwakel_{{$guru->nip}}">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Walikelas</h5>
                        </div>
                        <div class="modal-body">
                            @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label" hidden>Nomor Induk Pegawai</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Pegawai" name="nip" value="{{$guru->nip}}" required hidden>
                        </div>
                      </div>
                        

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Kelas</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="kode_kelas">
                                @if(count($kelas)>0)
                                @foreach($kelas as $k)
                                  <option value="{{$k->kode}}" selected>{{ $k->kode }} - {{$k->jurusan}}</option>
                                @endforeach
                                @else
                                <option selected>Tidak ada data</option>
                                @endif
                              </select>
                            </div>
                          </div>  

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>
</div>
</div>
</div>
</div>

@if($guru->level == "Guru")
<h5 style="color: #682773;"><b>Aktivitas Penilaian</b></h5>
             <hr style=" border-top: 1px dashed;">
                 <div class="card shadow mb-4 mt-3">
                    <div class="card-body">
                        <table class="table table-borderless table-hover">
                         <thead>
                            <tr>
                              <th>NIP</th>
                              <th>Keterangan</th>
                              <th>Mata Pelajaran</th>
                              <th>Komponen</th>
                              <th>NIS</th>
                              <th>Waktu</th>
                            </tr>
                           </thead>
                        <tbody>
                            @php $i=1 @endphp
                             @foreach($logN as $log)
                         <tr>
                           <td>{{ $log->nip ?? 'Tidak Tersedia' }}</td>
                               <td>{{ $log->keterangan ?? 'Tidak Tersedia'}}</td>
                          <td>{{ $log->mapel->kode ?? 'Tidak Tersedia'}} - {{ $log->mapel->nama ?? 'Tidak Tersedia'}}</td>
                          <td>{{ $log->komponen->nama ?? 'Tidak Tersedia'}}</td>
                          <td>{{ $log->nis ?? 'Tidak Tersedia'}}</td>
                          <td>{{$log->created_at->diffForHumans() ?? 'Tidak Tersedia'}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
       {{ $logN->links() }}
    </div>
    </div>
    
 <h5 style="color: #682773;"><b>Aktivitas Komponen</b></h5>
          <hr style=" border-top: 1px dashed;">
             <div class="card shadow mb-4 mt-3">
             <div class="card-body">
             <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                       <th>NIP</th>
                       <th>Keterangan</th>
                       <th>Mata Pelajaran</th>
                       <th>Komponen</th>
                        <th>Waktu</th>
                   </tr>
               </thead>
            <tbody>
              @php $i=1 @endphp
              @foreach($logK as $log)
              <tr>
                  <td>{{ $log->nip ?? 'Tidak Tersedia'}}</td>
                   <td>{{ $log->keterangan ?? 'Tidak Tersedia'}}</td>
                   <!-- Memanggil langsung method Mapel di model LogKomponen -->
                   <td>{{ $log->mapel->kode ?? 'Tidak Tersedia'}} - {{ $log->mapel->nama ?? 'Tidak Tersedia'}}</td>
                   <td>{{ $log->komponen->nama ?? 'Tidak Tersedia'}}</td>
                  <td>{{$log->created_at->diffForHumans()}}</td>
              </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
    </div>
    @endif

@endsection
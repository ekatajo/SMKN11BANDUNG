@extends('wakel.template.main')
@section('content')

<div class="container">

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
          </div></div></div></div></div>

  <div class="card shadow mb-4 mt-3">
    <div class="card-header py-3">
       <h5 class="m-0 font-weight-bold">Aktivitas Penilaian</h5>
    </div>
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
     <td>{{ $log->nip }}</td>
     <td>{{ $log->keterangan }}</td>
     <td>{{ $log->mapel->kode }} - {{ $log->mapel->nama }}</td>
     <td>{{ $log->komponen->nama }}</td>
     <td>{{ $log->nis}}</td>
     <td>{{$log->created_at->diffForHumans()}}</td>
   </tr>
   @endforeach
  </tbody>
  </table>
  </div>
  </div>

</div>

@endsection
@extends('wakel.template.main')
@section('content')
 
  <div class="container">
 
    <!-- Y Table (Proses Client) -->
    <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Data Siswa</h5>
         </div>
      <div class="card-body">

    <table id="myTable" class="table table-bordered">
      <thead>
        <tr>
          <th>Nomor Induk Siswa</th>
          <th>Nama</th>
          <th>Kodefikasi Kelas</th>
          <th>Alamat</th>
          <th>Gender</th>
          <th>Angkatan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($siswa as $s)
        <tr>
          <td>{{ $s->nis }}</td>
          <td>{{ $s->nama }}</td>
          <td>{{ $s->kode_kelas }}</td>
          <td>{{ $s->alamat }}</td>
          <td>{{ $s->gender }}</td>
          <td>{{ $s->tahun }}</td>
          <td> <a class="btn btn-outline-primary btn-circle" href="{{ $s->nis }}" role="button"><i class="fa-solid fa-address-card"></i></a></button>
        </tr>
        @endforeach
      </tbody>
    </table>
     <div class="modal-footer mt-3">
              <a href="/wakel/kelas_siswa" class="btn btn-secondary"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
            </div>
  </div>
   </div>
      </div>

  @endsection
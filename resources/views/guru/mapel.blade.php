@extends('guru.template.main')
@section('content')

<div class="container">
<div class="card shadow mb-4 mt-3">
    <div class="card border-left-dark shadow">
       <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold">Data Matapelajaran</h5>
       </div>
    <div class="card-body">

      <table id="myTable" class="table table-bordered">
          <thead>
              <tr>
                  <th>Kodefikasi</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @php $i=1 @endphp
              @foreach($mengajar as $m)
              <tr>
                  <td>{{ $m->mapel->kode }}</td>
                  <td>{{ $m->mapel->nama }}</td>
                  <td>{{ $m->mapel->kelas }}</td>
                  <td> <a class="btn btn-outline-primary btn-circle" href="/guru/kelas_siswa/" role="button"><i class="fa-solid fa-square-arrow-up-right"></i></a>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
   </div>
              </div>
            </div>

@endsection
@extends('guru.template.main')
@section('content')

<div class="container">
<div class="card shadow mb-4 mt-3">
       <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold">Data Kelas</h5>
       </div>
    <div class="card-body">

      <table id="myTable" class="table table-bordered">
          <thead>
              <tr>
                  <th>Kodefikasi</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Rombongan</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @php $i=1 @endphp
              @foreach($kelas as $k)
              <tr>
                  <td>{{ $k->kode }}</td>
                  <td>{{ $k->kelas }}</td>
                  <td>{{ $k->jurusan }}</td>
                  <td>{{ $k->rombel }}</td>
                  <td> <a class="btn btn-outline-primary btn-circle" href="/guru/kelas_siswa/{{$k->kode}}/{{auth()->user()->kode_mapel}}/siswa" role="button"><i class="fa-solid fa-square-arrow-up-right"></i></a>
                  
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
   </div>
              </div>

@endsection
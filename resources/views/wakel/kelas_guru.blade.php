@extends('wakel.template.main')
@section('content')

<div class="container">
  
<div class="card shadow mb-4 mt-3">
    <div class="card shadow">
       <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold">Kelas Saya</h5>
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
              @foreach($guru->kelasWK as $g)
              <tr>
                  <td>{{ $g->kode }}</td>
                  <td>{{ $g->kelas }}</td>
                  <td>{{ $g->jurusan }}</td>
                  <td>{{ $g->rombel }}</td>
                  <td> <a class="btn btn-outline-primary btn-circle" href="/wakel/kelas_guru/{{$g->kode}}/data_guru" role="button"><i class="fa-solid fa-square-arrow-up-right"></i></a>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
   </div>
              </div>
            </div>

@endsection
@extends('guru.template.main')
@section('content')

<div class="container">
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
                  <th>Kelas</th>
                  <th>Gender</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @php $i=1 @endphp
              @foreach($siswa as $g)
              <tr>
                  <td>{{ $g->nis }}</td>
                  <td>{{ $g->nama }}</td>
                  <td>{{ $g->kode_kelas }}</td>
                  <td>{{ $g->gender }}</td>
                  <td>{{ $g->alamat }}</td>
                  <td> <a class="btn btn-outline-primary btn-circle" href="/guru/kelas_siswa/{{$g->kode_kelas}}/{{$mapel->kode}}/{{$g->nis}}" role="button"><i class="fa-solid fa-address-card"></i></a> |
                    <a class="btn btn-outline-primary btn-circle" href="/guru/kelas_siswa/{{$g->kode_kelas}}/{{$mapel->kode}}/{{$g->nis}}/penilaian" role="button"><i class="fa-solid fa-award"></i></a>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div class="modal-footer mt-3">
              <button class="btn btn-secondary" onclick="goBack()"><i class="fa fa-arrow-left mr-2"></i>Kembali</button>
            </div>
  </div>
              </div>  
              </div>
<script>
    function goBack() {
        window.history.back();
    }
</script>

@endsection
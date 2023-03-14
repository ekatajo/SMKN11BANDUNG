@extends('kurikulum.template.main')
@section('content')

    <div class="container">
      <div class="card-deck-wrapper">
        <div class="card-deck">
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/kelas_siswa/predikatsiswaA">
                    <center><h6 class="card-title">PREDIKAT</h6>
                    <p class="card-text"><b>A</b></p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/kelas_siswa/predikatsiswaB">
                     <center><h6 class="card-title">PREDIKAT</h6>
                    <p class="card-text"><b>B</b></p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/kelas_siswa/predikatsiswaC">
                     <center><h6 class="card-title">PREDIKAT</h6>
                    <p class="card-text"><b>C</b></p></center>
                </a>
            </div>
          </div>
        </div>
  <hr>
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
                          <td><a class="btn btn-outline-primary btn-circle" href="/kurikulum/kelas_siswa/{{$k->kode}}/data_siswa" role="button"><i class="fa-solid fa-square-arrow-up-right"></i></i></a></td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
                      </div>
    </div>

@endsection
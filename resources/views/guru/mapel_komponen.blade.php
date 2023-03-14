@extends('guru.template.main')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

		<div class="container">

	{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif

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
              @foreach($guru as $g)
              <tr>
                  <td>{{ $g->mapel->kode }}</td>
                  <td>{{ $g->mapel->nama }}</td>
                  <td>{{ $g->mapel->kelas }}</td>
                  <td> <a href="/guru/mapel_komponen/{{$g->mapel->kode}}/komponen" class="btn btn-outline-primary btn-circle" href="" role="button"><i class="fa-solid fa-square-arrow-up-right"></i></a>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
   </div>
              </div>
            </div>

<script type="text/javascript">
  function goBack() {
        window.history.back();
    }
</script>
@endsection
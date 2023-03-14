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
          <h5 class="m-0 font-weight-bold">Data Kelas - {{$mapel->kode}}</h5>
       </div>
    <div class="card-body">

      <table id="myTable" class="table table-bordered">
          <thead>
              <tr>
                  <th>Kelas</th>
              </tr>
          </thead>
          <tbody>
            @foreach($mengajar as $m)
              @php $i=1 @endphp
              <tr>
                  <td>{{ $m->kode_kelas }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div class="modal-footer mt-3">
      <a href="#" class="btn btn-dark btn-icon-split" onclick="goBack()">
         <span class="icon text-gray-600">
            <i class="fa-solid fa-arrow-left-long"></i>
           </span>
       <span class="text">Kembali</span>
      </a>
  </div>
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
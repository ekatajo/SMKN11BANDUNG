@extends('wakel.template.main')
@section('content')
	
	<div class="container">
 
		  <!-- Y Table (Proses Client) -->
 		<div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Data Guru</h5>
         </div>
      <div class="card-body">

		<table id="myTable" class="table table-bordered">
      <thead>
        <tr>
          <th>Nomor Induk Pegawai</th>
          <th>Nama</th>
          <th>Gender</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($guru as $g)
        <tr>
          <td>{{ $g->nip }}</td>
          <td>{{ $g->nama }}</td>
          <td>{{ $g->gender }}</td>
          <td>{{ $g->alamat }}</td>
          <td> <a class="btn btn-outline-primary btn-circle" href="/wakel/kelas_guru/data_guru/detail_{{$g->nip}}" role="button"><i class="fa-solid fa-address-card"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
	</div>
	 </div>
				</div>	

 @endsection
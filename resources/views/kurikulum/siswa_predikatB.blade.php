@extends('kurikulum.template.main')
@section('content')
    <div class="container">

    	<!-- Y Table (Proses Client) -->
 		<div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Data Siswa Predikat (A)</h5>
         </div>
      <div class="card-body">
      	<!-- Tunjukan Library searchnya atau filter tabelnya  -->
		<table id="myTable" class="table table-bordered">
			<thead>
				<tr>
					<th>Nomor Induk Siswa</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Gender</th>
					<th>Tahun</th>
					<th>Komponen</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@for($i = 0; $i < $array; $i++)
				<tr>
					<td>{{ $testView[$i]->nis }}</td>
					<td>{{ $testView[$i]->nama }}</td>
					<td>{{ $testView[$i]->kode_kelas }}</td>
					<td>{{ $testView[$i]->gender }}</td>
					<td> {{ $testView[$i]->tahun }}</td>
					<td> {{ $testView[$i]->nama_komponen }}</td>
				</tr>
				@endfor
			</tbody>
		</table>
	<div class="modal-footer mt-3">
              <a class="btn btn-secondary" href="/kurikulum/kelas_siswa"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
            </div>
					</div>	
			</div>
	
@endsection
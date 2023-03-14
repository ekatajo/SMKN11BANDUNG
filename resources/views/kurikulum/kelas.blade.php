@extends('kurikulum.template.main')

@section('content')

	<div class="container">
 
		{{-- notifikasi gagal --}}
		@if (Session::has('error'))
		<div class="alert alert-warning alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<h5 class="alert-heading">Gagal!</h5>
					<strong>{{ Session::get('error') }}</strong>
		</div>
		@endif
		
	{{-- notifikasi gagal --}}
	@foreach ($errors->all() as $error)
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button> 
		<h5 class="alert-heading">Gagal!</h5>
		<strong>{{ $error }}</strong>
	</div>
	@endforeach

		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<h5 class="alert-heading">Sukses!</h5>
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
		<button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#importExcel">
			<span class="icon text-white-50">
			<i class="fa-solid fa-file-excel fa-lg"></i></span>
      <span class="text">
      Excel
      </span>
		</button>

		<button type="button" class="btn btn-outline-primary  btn-circle ml-3" data-toggle="modal" data-target="#tambahKelas">
			<i class="fa-solid fa-square-plus fa-lg"></i>
		</button>
<hr>
		<!-- Tambah -->
		<div class="modal fade" id="tambahKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/kurikulum/tambah_kelas">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
						</div>
						<div class="modal-body">
							@csrf
					 <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kodefikasi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Kodefikasi" name="kode" required>
                        </div>
                      </div>
 						
 					<div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kelas</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="10" value="10" name="kelas" required readonly>
                        </div>
                      </div>

             <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Jurusan" name="jurusan" required>
                        </div>
                      </div>
              <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Rombongan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Rombongan Belajar" name="rombel" required>
                        </div>
                      </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/data_kelas_import" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
 
  		<!-- Y Table (Proses Client) -->
 		<div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Data Kelas</h5>
         </div>
      <div class="card-body">
      	<!-- Tunjukan Library searchnya atau filter tabelnya  -->
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
					<td> <button type="button" class="btn btn-outline-warning btn-circle" data-toggle="modal" data-target="#editKelas-{{$k->kode}}"><i class="fa-solid fa-pen-to-square"></i></button> | <button type="button" class="btn btn-outline-danger btn-circle" data-toggle="modal" data-target="#hapusKelas-{{$k->kode}}"><i class="fa-solid fa-trash-can"></i></button>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
					</div>	
			</div>

			@foreach($kelas as $k)
	<div class="modal fade" id="editKelas-{{$k->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/kurikulum/{{$k->kode}}/edit_kelas">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
						</div>
						<div class="modal-body">
							@csrf
					 <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Kode" name="kode" value="{{$k->kode}}" required readonly>
                        </div>
                      </div>
 						
 					<div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kelas</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Kelas" name="kelas" value="{{$k->kelas}}" required readonly	>
                        </div>
                      </div>


                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Jurusan" name="jurusan" value="{{$k->jurusan}}" required>
                        </div>
                      </div>

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Rombongan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Rombongan" name="rombel" value="{{$k->rombel}}" required>
                        </div>
                      </div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		@endforeach	

		@foreach($kelas as $k)
	<div class="modal fade" id="hapusKelas-{{$k->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/kurikulum/{{$k->kode}}/hapus_kelas">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Yakin akan hapus?</h5>
						</div>
						<div class="modal-body">
							@csrf
							Tekan "Simpan" untuk melanjutkan proses Anda saat ini dengan 
							<p style="color: #682773;">
								Kodefikasi : {{$k->kode}}
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		@endforeach		

 	@endsection
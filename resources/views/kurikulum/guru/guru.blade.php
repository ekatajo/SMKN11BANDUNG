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
		<button type="button" class="btn btn-outline-primary  btn-circle ml-3" data-toggle="modal" data-target="#tambahGuru">
			<i class="fa-solid fa-square-plus fa-lg"></i></span>
		</button>
<hr>
		<!-- Tambah -->
		<div class="modal fade" id="tambahGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/kurikulum/tambah_guru">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
						</div>
						<div class="modal-body">
							@csrf
					 <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nip" placeholder="Nomor Induk Pegawai" name="nip" required>
                        </div>
                      </div>
           <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        	<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        	<div class="col-sm-9">
                        		<input type="text" class="form-control" id="nama" placeholder="Email" name="email" required>
                        	</div>
                      	</div>
 					<div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Pengguna</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="username" placeholder="Nama Pengguna" name="username" required>
                        </div>
                      </div>
					  <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="password" placeholder="Password Pengguna" name="password" required>
                        </div>
                      </div>
                           
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="level">
                              	  <option value="Kurikulum" selected>Kurikulum</option>
     							  <option value="Guru">Guru</option>
                              </select>
                            </div>
                          </div>


                          	<div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="kode_mapel">
                              	@foreach($mapel as $m)
                              	  <option value="{{$m->kode}}" selected>{{$m->nama}}</option>
                              	  @endforeach
                              </select>
                            </div>
                          </div> 
						  
                      <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Gender</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label mt-3">
                                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="L"> Laki <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label mt-3">
                                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="P"> Perempuan <i class="input-helper"></i></label>
                              </div>
                            </div>
                          </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Kecamatan</label><input type="text" class="form-control" placeholder="Kecamatan" value="" name="kecamatan"></div>
                    <div class="col-md-6"><label class="labels">Kota</label><input type="text" class="form-control" value="" placeholder="Kota" name="kota"></div>
                    <div class="col-md-6 mt-3"><label class="labels">Kode Pos</label><input type="text" class="form-control" value="" placeholder="Kode Pos" name="kodepos"></div>
                </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/data_guru_import" enctype="multipart/form-data">
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
					<th>Sebagai</th>
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
					<td>{{ $g->level }}</td>
					<td> <a class="btn btn-outline-primary btn-circle" href="data_guru/detail_{{$g->nip}}" role="button"><i class="fa-solid fa-address-card"></i></a> | <button type="button" class="btn btn-outline-warning btn-circle" data-toggle="modal" data-target="#editKelas-{{$g->nip}}"><i class="fa-solid fa-pen-to-square"></i></button> | <button type="button" class="btn btn-outline-danger btn-circle" data-toggle="modal" data-target="#hapusKelas-{{$g->nip}}"><i class="fa-solid fa-trash-can"></i></button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	 </div>
				</div>	

			@foreach($guru as $g)
	<div class="modal fade" id="editKelas-{{$g->nip}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/kurikulum/{{$g->nip}}/edit_guru">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
						</div>
						<div class="modal-body">
							@csrf
					 <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor Induk Pegawai</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Pegawai" name="nip" value="{{$g->nip}}" required readonly>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama" name="nama" value="{{$g->nama}}" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        	<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        	<div class="col-sm-9">
                        		<input type="text" class="form-control" id="nama" placeholder="Email" name="email" value="{{$g->email}}" required>
                        	</div>
                      	</div>

										<div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="level">
                              	  <option value="Kurikulum" @if($g->level == "Kurikulum") selected @endif>Kurikulum</option>
     							  <option value="Guru" @if($g->level == "Guru") selected @endif>Guru</option>
                              </select>
                            </div>
                          </div> 

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="kode_mapel">
                              	@foreach($mapel as $m)
								@if(old('kode_mapel', $g->kode_mapel) == $m->kode)
                              	  <option value={{$m->kode }} selected>{{$m->nama}}</option>
								@else
								<option value="{{ $m->kode }}">{{ $m->nama }}</option>
								@endif
                              	  @endforeach
                              </select>
                            </div>
                          </div>

                      <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Gender</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label mt-3">
                                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Laki" @if($g->gender == "L") checked @endif> Laki <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label mt-3">
                                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Perempuan" @if($g->gender == "P") checked @endif> Perempuan <i class="input-helper"></i></label>
                              </div>
                            </div>
                          </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" value="{{$g->alamat}}">{{$g->alamat}}</textarea>
                        </div>
                      </div>

                      <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Kecamatan</label><input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="{{$g->kecamatan}}"></div>
                    <div class="col-md-6"><label class="labels">Kota</label><input type="text" class="form-control" placeholder="Kota" name="kota" value="{{$g->kota}}"></div>
                    <div class="col-md-6 mt-3"><label class="labels">Kode Pos</label><input type="text" class="form-control" placeholder="Kode Pos" name="kodepos" value="{{$g->kodepos}}"></div>
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

		@foreach($guru as $g)
	<div class="modal fade" id="hapusKelas-{{$g->nip}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/kurikulum/{{$g->nip}}/hapus_guru">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Yakin akan hapus?</h5>
						</div>
						<div class="modal-body">
							@csrf
							Tekan "Simpan" untuk melanjutkan proses Anda saat ini dengan <p style="color: #682773;">Nomor Induk Pegawai : {{$g->nip}}.</p>
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
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
 
    <button type="button" class="btn btn-success  btn-icon-split" data-toggle="modal" data-target="#importExcel">
      <span class="icon text-white-50">
      <i class="fa-solid fa-file-excel fa-lg"></i></span>
      <span class="text">
      Excel
      </span>
    </button>

    <button type="button" class="btn btn-outline-primary btn-circle ml-3" data-toggle="modal" data-target="#tambahSiswa">
     <i class="fa-solid fa-square-plus fa-lg"></i>
    </button>

    <button type="button" class="btn btn-outline-primary btn-circle ml-3" data-toggle="modal" data-target="#filterSiswa"><i class="fa-solid fa-calendar-days"></i></button>

    <div class="modal fade" id="filterSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/kurikulum/kelas_siswa/{{$kelas->kode}}/tahun_siswa">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tahun Angkatan</h5>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group row">
                <input type="text" min="1" class="datepicker" placeholder="Tahun" name="tahun" style="margin-left: 150px;" required>
                <script>
                    $('.datepicker').datepicker({
                      format: " yyyy",
                      viewMode: "years", 
                    minViewMode: "years"
                    });
                </script>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

<hr>
    <!-- Tambah -->
    <div class="modal fade" id="tambahSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/kurikulum/{{$kelas->kode}}/tambah_siswa">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
            </div>
            <div class="modal-body">
              @csrf
           <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Siswa" name="nis" required>
                        </div>
                      </div>
            
          <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama" name="nama" required>
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
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kelas</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Kelas" name="kode_kelas" value="{{$kelas->kode}}" required readonly>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tahun Ajaran</label>
                          <div class="col-sm-9">
                            <input type="text" min="1" class="datepicker" placeholder="Tahun" name="tahun" required>
                <script>
                    $('.datepicker').datepicker({
                      format: " yyyy",
                      viewMode: "years", 
                    minViewMode: "years"
                    });
                </script>
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
        <form method="post" action="/data_siswa_import" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
            </div>
            <div class="modal-body"> 
              
              @csrf
              
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
            <h5 class="m-0 font-weight-bold">Data Siswa</h5>
         </div>
      <div class="card-body">

    <table id="myTable" class="table table-bordered">
      <thead>
        <tr>
          <th>Nomor Induk Siswa</th>
          <th>Nama</th>
          <th>Kodefikasi Kelas</th>
          <th>Alamat</th>
          <th>Gender</th>
          <th>Angkatan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
        @foreach($siswa as $s)
        <tr>
          <td>{{ $s->nis }}</td>
          <td>{{ $s->nama }}</td>
          <td>{{ $s->kode_kelas }}</td>
          <td>{{ $s->alamat }}</td>
          <td>{{ $s->gender }}</td>
          <td>{{ $s->tahun }}</td>
          <td> <a class="btn btn-outline-primary btn-circle" href="{{ $s->nis }}" role="button"><i class="fa-solid fa-address-card"></i></a> | <button type="button" class="btn btn-outline-warning btn-circle" data-toggle="modal" data-target="#editSiswa-{{$s->nis}}"><i class="fa-solid fa-pen-to-square"></i></button> | <button type="button" class="btn btn-outline-danger btn-circle" data-toggle="modal" data-target="#hapusSiswa-{{$s->nis}}"><i class="fa-solid fa-trash-can"></i></button>
        </tr>
        @endforeach
      </tbody>
    </table>
     <div class="modal-footer mt-3">
              <a class="btn btn-secondary" href="/kurikulum/kelas_siswa"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
            </div>
  </div>
   </div>
      </div>
 
@foreach($siswa as $s)
<div class="modal fade" id="editSiswa-{{$s->nis}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/kurikulum/{{$kelas->kode}}/{{$s->nis}}/edit_siswa">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
            </div>
            <div class="modal-body">
              @csrf
           <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor Induk Siswa</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama" name="nis" value="{{$s->nis}}" required readonly>
                        </div>
                      </div>
            
          <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama" name="nama" value="{{$s->nama}}" required>
                        </div>
                      </div>

                     <div class="form-group row">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Email" name="email" value="{{$s->email}}" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kelas</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Kelas" name="kode_kelas" value="{{$kelas->kode}}" required readonly>
                          </div>
                        </div>

                      <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Gender</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label mt-3">
                                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="L" @if($s->gender == "L") checked @endif> Laki <i class="input-helper"></i></label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label mt-3">
                                  <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="P" @if($s->gender == "P") checked @endif> Perempuan <i class="input-helper"></i></label>
                              </div>
                            </div>
                          </div>

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" value="{{$s->alamat}}">{{$s->alamat}}</textarea>
                        </div>
                      </div>

                      <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Kecamatan</label><input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="{{$s->kecamatan}}"></div>
                    <div class="col-md-6"><label class="labels">Kota</label><input type="text" class="form-control" placeholder="Kota" name="kota" value="{{$s->kota}}"></div>
                    <div class="col-md-6 mt-3"><label class="labels">Kode Pos</label><input type="text" class="form-control" placeholder="Kode Pos" name="kodepos" value="{{$s->kodepos}}"></div>
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

    @foreach($siswa as $s)
<div class="modal fade" id="hapusSiswa-{{$s->nis}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/kurikulum/{{$kelas->kode}}/{{$s->nis}}/hapus_siswa">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin akan hapus?</h5>
            </div>
            <div class="modal-body">
              @csrf
              Tekan "Simpan" untuk melanjutkan proses Anda saat ini dengan
              <p style="color: #682773;">Nomor Induk Siswa : {{$s->nis}}</p>
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
<script>
    window.onload = function (){
      let tahun = document.getElementById('tahun');
      tahun.value = new Date().getFullYear();
    }
    window.onload = function (){
      let tahun = document.getElementById('tahun');
      tahun.value = new Date().getFullYear();
    }
</script>

  @endsection
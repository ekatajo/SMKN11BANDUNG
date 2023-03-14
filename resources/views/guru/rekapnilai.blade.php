 @extends('guru.template.main')
@section('content')

     <div class="container">

      @if ($ada = Session::get('sukses'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $ada }}</strong>
  </div>
  @endif

        <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold">Rekapitulasi Penilaian</h5>
                    </div>
                    <div class="card-body">
                    {{-- {{  $merge }} --}}
                    <div class="row">
              <div class="col-2">
                <p class="mb-0">Nomor Induk Siswa</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->nis }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->nama }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Kelas</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->kelas->kelas }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Jurusan</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->kelas->jurusan }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Rombongan</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->kelas->rombel }}</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-2">
                <p class="mb-0">Tahun</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->tahun ?? '-' }}</p>
              </div>
            </div>
                    <table id="myTable" class="table table-bordered">
                        @foreach ($mapel as $mapel)
                            <tr>
                                <th style="text-align:center; color:black" colspan="5"><b>{{ $mapel->nama }}</b></th>
                            </tr>
                            <tr>
                                <td colspan="1">Komponen</td>
                                <td>Nilai</td>
                                <td>Predikat</td>
                                <td>Keterangan</td>
                                <td>Aksi</td>
                            </tr>
                            <tr>
                                @foreach ($mapel->komponen as $komponen)
                                    <tr>
                                        <td>
                                            {{ $komponen->nama }}
                                        </td>
                                        <td>
                                            {{ $komponen->nilai ? $komponen->nilai[0]->nilai : "" }}
                                        </td>
                                        <td>
                                            {{ $komponen->nilai ? $komponen->nilai[0]->predikat : "" }}
                                        </td>
                                        <td>
                                            {{ $komponen->nilai ? $komponen->nilai[0]->keterangan : "" }}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-warning btn-circle" data-toggle="modal" data-target="#editNilai-{{$komponen->nilai[0]->id}}"><i class="fa-solid fa-pen-to-square"></i></button> | <button type="button" class="btn btn-outline-danger btn-circle" data-toggle="modal" data-target="#hapusNilai-{{$komponen->nilai[0]->id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>

    @foreach ($mapel->komponen as $komponen)
    <div class="modal fade" id="hapusNilai-{{$komponen->nilai[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="post" action="/guru/hapus_nilai/{{$komponen->nilai[0]->id}}">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin akan hapus?</h5>
                </div>
                <div class="modal-body">
                  @csrf
                  Tekan "Simpan" untuk melanjutkan proses Anda saat ini dengan
                  <p style="color: #682773;">Komponen : {{ $komponen->nama }}</p>
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

        @foreach ($mapel->komponen as $komponen)
    <div class="modal fade" id="editNilai-{{$komponen->nilai[0]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="post" action="/guru/edit_nilai/{{$komponen->nilai[0]->id}}">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Nilai</h5>
                </div>
                <div class="modal-body">
                  @csrf
                  <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label" hidden>ID</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputUsername2" placeholder="ID" value="{{$komponen->nilai[0]->id}}" name="id" required hidden>
                            </div>
                          </div>
    
                  <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama" value="{{$komponen->nama}}" name="nama" required readonly>
                            </div>
                          </div>
    
               <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nilai</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nilai" value="{{$komponen->nilai[0]->nilai}}" name="nilai" required>
                            </div>
                          </div>
                 
               <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Keterangan" value="{{$komponen->nilai[0]->keterangan}}" name="keterangan" required>
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

                </div>
            </div>
        </div>


@endsection
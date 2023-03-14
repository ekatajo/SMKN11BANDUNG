@extends('guru.template.main')
@section('content')

<div class="container">
  {{-- notifikasi form validasi --}}
  @if ($errors->has('file'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('file') }}</strong>
  </span>
  @endif

  @if ($ada = Session::get('nilai-ada'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $ada }}</strong>
  </div>
  @endif
  
  {{-- notifikasi sukses --}}
  @if ($sukses = Session::get('sukses'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $sukses }}</strong>
  </div>
  @endif
  <center class="mb-3"><h3><b>PENILAIAN RAPORT DIAGNOSTIK</b></h3></center>
  <hr>
    <div class="card shadow mb-5">
    <div class="card-body">

<table class="table table-hover table-borderless">
<form action="/guru/{{$mapel->kode}}/{{ $siswa->nis }}/penilaian" method="post">
            @csrf
<tbody>
<tr><td><b>Nomor Induk Siswa</b></td><td>:</td><td><b>{{ $siswa->nis }}</b></td></tr>
<tr><td width="350px"><b>Nama</b></td><td>:</td><td>{{ $siswa->nama }}</td></tr>
<tr><td><b>Kelas</b></td><td>:</td><td>{{ $kelas->kode }} - {{$kelas->jurusan}}</td></tr>
<tr><td><b>Mata Pelajaran</b></td><td>:</td><td>{{ $mapel->kode }} - {{$mapel->nama}}</td></tr>
<tr><td><b>Tahun Ajaran</b></td><td>:</td><td>{{ $siswa->tahun }}</td></tr>
<tr><td><b>Komponen</b></td><td>:</td><td><select class="form-control" name="id_komponen">
                   @foreach ($komponen as $k)
                    <option value="{{$k->id}}" selected>{{ $k->nama }}</option>
                   @endforeach
                   </select></td></tr>
<tr><td><b>Nilai</b></td><td>:</td><td><input type="number" class="form-control" id="nilai" placeholder="Nilai" name="nilai" required></td></tr>
<tr><td><b>Keterangan</b></td><td>:</td><td><textarea class="form-control" placeholder="" id="floatingTextarea2" name="keterangan" style="height: 100px"></textarea>
</table>
      <div class="modal-footer">
              <a class="btn btn-secondary" href="/guru/kelas_siswa"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
              <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
          </form>
              </div>  
</div>
  </div>
   
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
<script>
            /* $(document).ready(function() {
              $('#tahun').val(new Date.getFullYear());
              $('#mapel').on('change', function() {
                var mapelID = $(this).val();
                if(mapelID) {
                    $.ajax({
                        url: '/getKomponen/'+mapelID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data)
                        {
                          if(data){
                              $('#komponen').empty();
                              $('#komponen').append('<option hidden>Choose Course</option>'); 
                              $.each(data, function(key, komponen){
                                  $('select[name="komponen"]').append('<option value="'+ key +'">' + komponen.name+ '</option>');
                              });
                          }else{
                              $('#komponen').empty();
                          }
                      }
                    });
                }else{
                  $('#komponen').empty();
                }
              });
            }); */
        </script>

@endsection
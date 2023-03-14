@extends('guru.template.main')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

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


    <button type="button" class="btn btn-outline-primary  btn-circle" data-toggle="modal" data-target="#tambahKomponen">
      <i class="fa-solid fa-square-plus fa-lg"></i>
    </button>
<hr> 
  
    <!-- Tambah -->
    <div class="modal fade" id="tambahKomponen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/guru/tambah_komponen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Komponen</h5>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label" hidden>Nomor Induk Pegawai</label>
                        <div class="col-sm-9">
                          @foreach($guru as $g)
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Pegawai" name="nip" value="{{$g->nip}}" required hidden>
                          @endforeach
                        </div>
                      </div>
                      <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-6 ml-4">
                          @foreach($guru as $g)
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Pegawai" name="kode_mapel" value="{{$g->mapel->kode}}" required readonly>
                          @endforeach
                        </div>
                          </div>  

              <div class="input-group field_wrapper mb-3">
                <input type="text" class="form-control mr-3" aria-describedby="button-addon2" name="nama_komponen[]">
                <a class="btn btn-primary" href="javascript:void(0);" id="add_button" title="Add field"><i class="fas fa-plus"></i></a>
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

    <!-- Y Table (Proses Client) -->
    <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Data Komponen - {{$g->mapel->kode}} - {{$g->mapel->nama}}</h5>
         </div>
      <div class="card-body">

    <table id="myTable" class="table table-border">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1 @endphp
         @foreach($komponen as $k)
        <tr>
          <td>{{$k->id}}</td>
          <td>{{$k->nama}}</td>
          <td> <button type="button" class="btn btn-outline-warning btn-circle" data-toggle="modal" data-target="#editKomponen-{{$k->id}}"><i class="fas fa-edit"></i></button> | <button type="button" class="btn btn-outline-danger btn-circle" data-toggle="modal" data-target="#hapusKomponen-{{$k->id}}"><i class="fas fa-trash"></i></button>
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
    

      @foreach($komponen as $kk)
<div class="modal fade" id="editKomponen-{{$kk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/guru/{{$kk->id}}/edit_komponen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Komponen</h5>
            </div>
            <div class="modal-body">
              @csrf
           <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nama Komponen" name="nama" value="{{$kk->nama}}" required>
                        </div>
                      </div>

                           <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label" hidden>Mata Pelajaran</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nomor Induk Pegawai" name="kode_mapel" value="{{$mapel->kode}}" required hidden>
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

        @foreach($komponen as $k)
<div class="modal fade" id="hapusKomponen-{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="post" action="/guru/{{$k->id}}/hapus_komponen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin akan hapus?</h5>
            </div>
            <div class="modal-body">
              @csrf
              Tekan "Simpan" untuk melanjutkan proses Anda saat ini dengan
              <p style="color: #682773;">Kodefikasi : {{$k->id}}</p>
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

      <script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('#add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="input-group mt-3">';
    fieldHTML=fieldHTML + '<input type="text" class="form-control mr-3" aria-describedby="button-addon2" name="nama_komponen[]">';
    fieldHTML=fieldHTML + '<div><a href="javascript:void(0);" class="remove_button btn btn-danger" ><i class="fa fa-minus"></i></a></div>';
    fieldHTML=fieldHTML + '</div></div>'; 
    var x = 1; //Initial field counter is 1
     
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
     
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('').parent('').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

function goBack() {
        window.history.back();
    }
</script>

@endsection
@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
            </div>
        </div>
        <form>
            <div class="form-group">
              <label for="exampleInputNama">Nama:</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputNIS">Username:</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputTTL">Email:</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputKomke">Asal Sekolah:</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputNIS">Perusahaan PKL:</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
          </form>
          <div class="col-button">
            <button type="button" class="btn btn-outline-dark">Simpan</button>
            <button type="button" class="btn btn-outline-dark">Kembali</button>
        </div>
    </div>
@endsection
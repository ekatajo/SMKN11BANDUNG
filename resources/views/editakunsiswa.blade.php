@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
            </div>
            <div class="col-button">
                <button type="button" class="btn btn-outline-dark">Cancel</button>
                <button type="button" class="btn btn-outline-dark">Save</button>
            </div>
        </div>
        <form>
            <div class="form-group">
              <label for="exampleInputNama">Nama:</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputNIS">NIS:</label>
              <input type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputTTL">Tempat, Tanggal Lahir:</label>
                <input type="date" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputKomke">Kompetensi Keahlian:</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputNIS">Nama Perusahaan:</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
          </form>
    </div>
@endsection
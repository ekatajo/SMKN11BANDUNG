@extends('guru.template.main')
@section('content')
<div class="container">
    <div class="row mb-3">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-color: #682773;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:green;">
                                                Guru</div>
                                            <div class="mb-0 font-weight-bold text-gray-800">{{$guru3}} Guru</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-chalkboard-user" style="color:green;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-color: #682773;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:green;">
                                                Mata Pelajaran</div>
                                            <div class="mb-0 font-weight-bold text-gray-800">{{$mapel->nama}}</div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-book" style="color:green;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-color: #682773;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:green;">Siswa 
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="mb-0 mr-3 font-weight-bold text-gray-800"> {{ $angkatanFunc[0]->totalAngkatan }} Siswa</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users" style="color:green;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-color: #682773;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:green;">Kelas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="mb-0 mr-3 font-weight-bold text-gray-800">{{$kelas}} Kelas</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-university" style="color:green;"></i>         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-color: #682773;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:green;">Komponen
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="mb-0 mr-3 font-weight-bold text-gray-800">{{$komponen}} Komponen</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-th-list" style="color:green;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 style="color: #682773;"><b>Komponen Saya</b></h5>
    <hr style=" border-top: 1px dashed;">
    {{-- Looping data sebanyak atau dimulai index dari $i = 0, $i++ (increment) = Jika benar menambah --}}
    @for($i = 0; $i < $array; $i++)
    <span class="badge badge-dark mb-5">{{ $testProc[$i]->nama }}</span>
    @endfor

    <h5 style="color: #682773;"><b>Aktivitas Komponen</b></h5>
    <hr style=" border-top: 1px dashed;">
    <div class="card mx-auto mt-3 mb-5 shadow" >
  <div class="card-body">
    <table class="table table-borderless table-hover">
  <tbody>
    @foreach($logK as $log)
    <tr>
        <td><span class="badge badge-success">{{$log->nip}}</span></td>
        <td><span class="badge badge-light">{{$log->keterangan}}</span></td>
        <td><span class="badge badge-light">{{$log->nama}}</span></td>
        <td><span class="badge badge-light">{{$log->created_at->diffForHumans()}}</span></td>
    
        <td></td>
    </tr>
     @endforeach
</tbody>
</table>
</div>
</div>

<h5 style="color: #682773;"><b>Aktivitas Penilaian</b></h5>
    <hr style=" border-top: 1px dashed;">
    <div class="card mx-auto mt-3 mb-5 shadow" >
  <div class="card-body">
    <table class="table table-borderless table-hover">
  <tbody>
    @foreach($logN as $log)
    <tr>
        <td><span class="badge badge-success">{{$log->nip}}</span></td>
        <td><span class="badge badge-light">{{$log->keterangan}}</span></td>
        <td><span class="badge badge-light">{{$log->nama}}</span></td>
        <td><span class="badge badge-light">{{$log->nis}}</span></td>
        <td><span class="badge badge-light">{{$log->created_at->diffForHumans()}}</span></td>
    
        <td></td>
    </tr>
     @endforeach
</tbody>
</table>
</div>
</div>




<h5 style="color: #682773;"><b>Aktivitas Detail</b></h5>
<hr style=" border-top: 1px dashed;">

<div class="card shadow mb-4 mt-3">
      <div class="card-body">
        
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th >Nomor Induk Pegawai</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($guru2 as $g)
                <tr>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->nama }}</td>
                    <td>{{ $g->gender }}</td>
                    <td>{{ $g->alamat }}</td>
                    <td><a class="btn btn-outline-primary btn-circle" href="/guru/aktivitas/detail_{{$g->nip}}" role="button"><i class="fa-solid fa-address-card"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
                </div>  
            </div>

@endsection
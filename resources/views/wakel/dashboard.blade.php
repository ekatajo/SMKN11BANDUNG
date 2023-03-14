@extends('wakel.template.main')
@section('content')

  <div class="container py-4">
    <h1 class="h3 mb-2" style="color: #682773;">Selamat Datang,</h1>
 <h5 class="h5 mb-2 text-gray-800">{{ auth()->user()->nama }}</h5>
 <hr>

    <div class="card-deck-wrapper">
        <div class="card-deck">
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/wakel/kelas_siswa">
                    <center><h4 class="card-title"><i class="fa-solid fa-user-graduate"></i></h4>
                    <p class="card-text">Siswa</p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/wakel/kelas_guru">
                     <center><h4 class="card-title"><i class="fa-solid fa-chalkboard-user"> </i></h4>
                    <p class="card-text">Guru</p></center>
                </a>
            </div>
        </div>
    </div>
    <center><img class="img-fluid px-3 px-sm-4 mt-5 mb-4" style="width: 25rem;" src="{{asset('template/img/undraw_team_work_k-80-m.svg')}}" alt="ilustrasi">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.</p></center> 
</div>
                   

@endsection
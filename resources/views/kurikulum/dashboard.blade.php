@extends('kurikulum.template.main')
@section('content')

  <div class="container py-4">
    <h1 class="h3 mb-2" style="color: #682773;">Selamat Datang,</h1>
 <h5 class="h5 mb-2 text-gray-800">{{ auth()->user()->nama }}</h5>
 <hr>

    <div class="card-deck-wrapper">
        <div class="card-deck">
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/kelas_siswa">
                    <center><h4 class="card-title"><i class="fa fa-users"></i></h4>
                    <p class="card-text">Siswa</p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/data_guru">
                     <center><h4 class="card-title"><i class="fa-solid fa-chalkboard-user"></i></h4>
                    <p class="card-text">Guru</p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/data_mapel">
                     <center><h4 class="card-title"><i class="fa fa-book"></i></h4>
                    <p class="card-text">Matepelajaran</p></center>
                </a>
            </div>
            <div class="card p-2">
                <a class="card-block stretched-link text-decoration-none" href="/kurikulum/data_kelas">
                     <center><h4 class="card-title"><i class="fa fa-university"></i></h4>
                    <p class="card-text">Kelas</p></center>
                </a>
            </div>
        </div>
    </div>
    <center><img class="img-fluid px-3 px-sm-4 mt-5 mb-4" style="width: 25rem;" src="{{asset('template/img/undraw_engineering_team_a7n2.svg')}}" alt="ilustrasi">
                   </center>
 
<h3 class="blink" style="margin-top: 75px; margin-bottom: 55px;"><center><b>DIAGRAM</b></center></h3>
    
    <div id="chartSiswa"></div>
    <br>
    <div id="chartGuru"></div>
</div>

<script src="{{ asset('highcharts.js') }}"></script>
<script>
        Highcharts.chart('chartSiswa', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Siswa Berdasarkan Kelas'
        },
        xAxis: {
            categories: [
                @foreach ($students as $student)
                '{{ $student->kode_kelas }}',
            @endforeach
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah Siswa',
            data: [ @foreach ($students as $student)
                {{ $student->total }},
            @endforeach]
    
        }, ]
    })
</script>

<script>
        Highcharts.chart('chartGuru', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Guru Berdasarkan Mata Pelajaran'
        },
        xAxis: {
            categories: [
                @foreach ($teachers as $student)
                '{{ $student->kode_mapel }}',
            @endforeach
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah Guru',
            data: [ @foreach ($teachers as $student)
                {{ $student->total }},
            @endforeach]
    
        }, ]
    })
</script>
                   

@endsection
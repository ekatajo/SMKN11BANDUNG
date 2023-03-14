<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        
    <link rel="icon" type="image/png" href="{{asset('template/img/20230131_170949.png')}}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Y Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>

    
    
    <title>Kurikulum - PDF</title>
</head>
<body>
    <div class="container">
    <h6 class="text-center mt-3" style="color:black;"><b>PEMERINTAH DAERAH PROVINSI JAWA BARAT DINAS PENDIDIKAN</b></h6>
    <br>
    <h4 class="text-center" style="color:black;"><b>SMK NEGERI 11 BANDUNG</b></h4>
    <hr style="border: 1px solid black;">
    <h5 class="text-center" style="color:black;"><b>LAPORAN HASIL PENACAPAIAN KOMPETENSI PESERTA DIDIK</b></h5>
    <div class="row mt-5">
              <div class="col-2">
                <p class="mb-0">Nama Peserta Didik </p>
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
                <p class="mb-0">NIS/NISN</p>
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
                <p class="mb-0">Kelas</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">{{ $siswa->kode_kelas }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Semester</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">1</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <p class="mb-0">Tahun Pelajaran</p>
              </div>
              <div class="col-auto">
                <p class="mb-0">:</p>
              </div>
              <div class="col-auto">
                <p class="text-muted mb-0">2022</p>
              </div>
            </div>
            <br>
     <table class="table mt-3">
                        @foreach ($mapel as $mapel)
                            <tr>
                                <th style="text-align:center; color:black;" colspan="5"><b>{{ $mapel->nama }}</b></th>
                            </tr>
                            <tr>
                                <td colspan="1">No</td>
                                <td colspan="1">Komponen</td>
                                <td>Nilai</td>
                                <td>Predikat</td>
                                <td>Deskripsi</td>
                            </tr>
                            <tr>
                                @php $no = 1; @endphp
                                @foreach ($mapel->komponen as $komponen)
                                    <tr class="table table-bordered">
                                        <td style="width: 50px">{{ $no++ }}</td>
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
                                    </tr>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

<!-- Y Table -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
$('#myTable').DataTable();
} );
</script>

<script>
    window.print();
</script>

</body>
</html>

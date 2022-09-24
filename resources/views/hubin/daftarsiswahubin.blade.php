@extends('layouts.main')
@section('content')


    <section>
        <div class="content-body">
            <div class="container mb-5">
                <div class="card">
                    <p class="mt-4 ml-5" style="color:black; font-weight:700;">Perusahaan</p> 
                    <table class="tabelperusahaan mb-5 mt-3">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nama Perusahaan</th>
                            <th>Divisi</th>
                        </tr>
                        <?php 
                            $i = 1;

                            $i++;
                        ?>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->nis }}</td>
                            <td>{{ $d->NamaSiswa }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td>PT SCOLA LMS</td>
                            <td>IT</td>
                        </tr>
                        @endforeach
                       <tr>
                            <td>2</td>
                            <td>Diding</td>
                            <td>XII - RPL 2</td>
                            <td>PT CHLORINE DIGITAL MEDIA</td>
                            <td>IT</td>
                       </tr>
                       <tr>
                            <td>3</td>
                            <td>Dudung</td>
                            <td>XII - RPL 1</td>
                            <td>PT TITIK TERANG</td>
                            <td>IT</td>
                       </tr>
                       <tr>
                        <td>4</td>
                        <td>Dedeng</td>
                        <td>XII - RPL 2</td>
                        <td>PT TITIK TERANG</td>
                        <td>IT</td>
                   </tr>
                   <tr>
                    <td>5</td>
                    <td>Dodong</td>
                    <td>XII - RPL 1</td>
                    <td>PT SCOLA LMS</td>
                    <td>IT</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Bambang</td>
                    <td>XII - RPL 1</td>
                    <td>PT CHLORINE DIGITAL MEDIA</td>
                    <td>IT</td>
               </tr>
               <tr>
                <td>7</td>
                <td>Bimbing</td>
                <td>XII - RPL 2</td>
                <td>PT CHLORINE DIGITAL MEDIA</td>
                <td>IT</td>
           </tr>
           <tr>
            <td>8</td>
            <td>Bembeng</td>
            <td>XII - RPL 2</td>
            <td>PT SCOLA LMS</td>
            <td>IT</td>
       </tr>
                    </table>
                    <hr>
                    <p class="teks1">Rows per page: <span class=""> 8 <i class="fa-solid fa-caret-down"></i><span class="teks1 ml-4">1-8 of 1240</span><span><i class="fa-solid fa-chevron-left mr-3"></i><i class="fa-solid fa-chevron-right"></i> </span></p>
                </div>
            </div>
        </div>
    </section>

@endsection
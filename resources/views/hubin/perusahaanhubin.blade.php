@extends('layouts.main')
@section('content')


    <section>
        <div class="content-body">
            <div class="container mb-5">
                <div class="card">
                    <p class="mt-4 ml-5" style="color:black; font-weight:700;">Perusahaan</p> 
                    <table class="tabelperusahaan mb-5 mt-3">
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Alamat Perusahaan</th>
                            <th>Nomor FAX</th>
                            <th>Jumlah Murid</th>
                        </tr>
                        <tr>
                            <td>PT Scola LMS</td>
                            <td>Jl. Karang Tineung Indah I No.12A, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162</td>
                            <td>-</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>PT Titik Terang</td>
                            <td>National Rte 3 129-325, Central Cigugur, Cimahi Tengah, Cimahi City, West Java 40522, Indonesia</td>
                            <td>-</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>PT Chlorine Digital Media</td>
                            <td> Jl. Kebon Sirih No.40, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</td>
                            <td>-</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>PT Sampulkreativ</td>
                            <td>Gedung BITC, Jl. HMS Mintareja Sarjana Hukum, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521</td>
                            <td>-</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>PT Scola LMS</td>
                            <td>Jl. Karang Tineung Indah I No.12A, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162</td>
                            <td>-</td>
                            <td>5</td>
                        </tr>
                    </table>
                    <hr>
                    <p class="teks1">Rows per page: <span class=""> 8 <i class="fa-solid fa-caret-down"></i><span class="teks1 ml-4">1-8 of 1240</span><span><i class="fa-solid fa-chevron-left mr-3"></i><i class="fa-solid fa-chevron-right"></i> </span></p>
                </div>
            </div>
        </div>
    </section>

@endsection
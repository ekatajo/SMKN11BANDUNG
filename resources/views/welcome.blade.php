<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To E-Prakerin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f13fa7e0b3.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style>
      * {
        font-family: "Montserrat", sans-serif;
      }
      .first {
        margin-top: 0px;
      }
      .caption-img1 {
        position: absolute;
        left: 86px;
        color: white;
      }
      .eprakerin {
        font-size: 60px;
        font-weight: 600;
        bottom: 150px;
      }
      .capt1 {
        bottom: 48px;
        width: 65%;
        font-weight: 400;
        font-size: 20px;
      }
      .button1 {
        background: #75a0a9;
        border-radius: 10px;
        width: 180px;
        height: 48px;
        bottom: 0px;
        border-color: transparent;
        font-size: 19px;
        font-weight: 600;
      }
      .button1:hover {
        background: #49666b;
      }
      .garis {
        width: 61px;
        height: 0px;
        border: 4px solid #395b64;
        text-align: center;
        margin: auto;
        margin-top: 100px;
      }
      .judul1 {
        margin: auto;
        text-align: center;
      }
      .card {
        width: 95%;
        border-radius: 10px;
        height: 350px;
        box-shadow: 0px 1px 4px 4px rgba(41, 41, 41, 0.15);
      }
      .desc1 {
        font-size: 19px;
        border: none;
        background: none;
      }
      .ftext {
        color: white;
        margin-left: 30px;
        margin: auto;
        margin-top: 20px;
        font-weight: 400;
      }
      .my-icon{
        line-height:40px;

     }
     .icon1{
        font-size: 70px;margin: 0 auto;padding-top: 64px;
     }
     .card:hover .flip-card-inner{
        transform: rotateY(180deg);
     }
     .flip-card-inner {
     position: relative;
     width: 100%;
     height: 100%;
     text-align: center;
     transition: transform 0.6s;
     transform-style: preserve-3d;
     box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .flip-card-front, .flip-card-back {
     position: absolute;
     width: 100%;
     height: 100%;
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
    }
.flip-card-back {
  background-color: transparent;
  color: black;
  transform: rotateY(180deg);
}
.nav2{
  text-decoration: none;
  font-weight: 600;
  font-size: 16px;
  margin-top: 19px;
}
nav{
  z-index: 999;
  height: 75px;
}
.navbar-fixed-top.scrolled {
  background-color: #5c7e85 !important;
  transition: background-color 200ms linear;
}
    </style>
  </head>
  <body>
    <nav class="navbar-fixed-top" style="position: fixed;">
      <div class="container-fluid" style="background-color: transparent;">
        <div class="row">
          <div class="col-3">
            <img src="assets/img/logo e-prakerin white.png" style="width: 75%; margin-top: -75px;">
          </div>
          <div class="col-2" style="margin-top: 25px;">
            <a href="#" class="ftext nav2">Beranda</a>
          </div>
          <div class="col-2" style="margin-top: 25px;">
            <a href="#" class="ftext nav2">Panduan</a>
          </div>
          <div class="col-2" style="margin-top: 25px;">
            <a href="#" class="ftext nav2">Hubungi</a>
          </div>
          <div class="col-3">
            <a href="#"><button class="nav2 button1 ftext" style="height: 35px;width: 160px;">Sign-In</button></a>
          </div>
        </div>
      </div>
    </nav>
    <div class="first">
      <img style="filter: brightness(60%);" src="https://image.cnbcfm.com/api/v1/image/106922887-1628206615260-gettyimages-887132600-as1700__08.jpeg?v=1628206641" class="d-block w-100" />
      <p class="caption-img1 eprakerin">E-PRAKERIN</p>
      <p class="caption-img1 capt1">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
      </p>
      <button class="caption-img1 button1">Get Started</button>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h1 style="font-weight: 600">Praktik Kerja Lapangan</h1>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <p style="width: 89%; font-size: 18px">
            Praktik Kerja Lapangan (PKL) adalah mata pelajaran yang merupakan
            wahana pembelajaran di dunia kerja (termasuk teaching factory). PKL
            memberikan kesempatan kepada peserta didik menginternalisasi dan
            menerapkan soft skills (karakter dan budaya kerja) serta menerapkan,
            meningkatkan, dan mengembangkan penguasaan hard skills (kompetensi
            teknis) sesuai dengan konsentrasi keahliannya dan kebutuhan dunia
            kerja, serta kemandirian berwirausaha.
          </p>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12">
          <div class="garis"></div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <h2 class="judul1" style="font-weight: 600">
            Karakteristik Mata Pelajaran
          </h2>
          <p class="judul1" style="color: #838383">Praktik Kerja Lapangan</p>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-3">
          <div class="card">
            <!--
                <img
              class="judul1"
              src="assets/img/softskils 1.svg"
              style="width: 60%"
                /> 
            -->
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <i class="fa-solid fa-users icon1" ></i>
                    <h4 class="judul1 mt-4">Internalisasi dan penerapan soft skills</h4>
                </div>
            <div class="flip-card-back">
                <p class="mt-3">Meliputi internalisasi dan penerapan etika berkomunikasi secara lisan dan tuisan, integritas, (antara lain jujur, disiplin, komitmen, dan tanggung jawab), etos kerja, bekerja secara mandiri dan/ atau bekerja dalam tim, kepedulian sosial dan lingkungan, serta ketaatan terhadap norma, K3LH, dan POS yang berlaku di dunia kerja. </p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
           <!-- <img
              class="judul1"
              src="assets/img/hardskills 1.svg"
              style="width: 60%"
            /> -->
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="fa-solid fa-user-gear icon1 mb-4"></i>
                        <h4 class="judul1">Penerapan hardskills</h4>
                    </div>
                    <div class="flip-card-back">
                        <p style="margin-top: 50%;">Meliputi pelaksanaan pekerjaan sesuai POS yang berlaku di dunia kerja.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
          <div class="card">
            <!--<img
              class="judul1"
              src="assets/img/hardskills2 1.svg"
              style="width: 60%"
            />-->
            <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="fa-solid fa-gears icon1 mb-4"></i>
                        <h4 class="judul1">Peningkatan dan pengembangan hardskills</h4>
                    </div>
                    <div class="flip-card-back">
                      <p style="margin-top: 40%;">Meliputi penguasaan kompetensi teknis baru dan/ atau kompetensi teknis yang belum tuntas dipelajari sesuai konsentrasi keahlian. </p>
                    </div>
             </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <!--<img
              class="judul1"
              src="assets/img/berwirausaha 1.svg"
              style="width: 60%"
            />-->
            <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <i class="fa-solid fa-chart-line icon1"></i>
                        <h4 class="judul1 mt-4">Penyiapan Kemandirian Berwirausaha</h4>
                    </div>
                    <div class="flip-card-back">
                      <p style="margin-top: 50%;">Meliputi penyiapan kemandirian peserta didik, untuk penguatan dan pemahaman analisis usaha.</p>
                    </div>
                  </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 200px">
        <div class="col-12">
          <h3 class="judul1" style="font-weight: 600; width: 60%">
            Capaian Pembelajaran Setiap Fase Berdasarkan Elemen
          </h3>
          <p class="judul1" style="color: #838383">Praktik Kerja Lapangan</p>
        </div>
      </div>

      <div class="row" style="margin-top: 80px">
        <div class="col-12">
          <button type="button" data-toggle="collapse" data-target="#content" class="desc1">Internalisasi dan penerapan soft skills</button><i class="fa-solid fa-plus my-icon" style="float: right;"></i>
          <hr/>
          <div id="content" class="desc1 collapse">
            <p>
              Pada akhir fase, peserta didik mampu menerapkan etika
              berkomunikasi secara lisan dan tulisan, integritas (antara lain
              jujur, disiplin, komitmen dan tanggung jawab), etos kerja, bekerja
              secara mandiri dan/atau bekerja di dalam tim, kepedulian sosial
              dan lingkungan, serta ketaatan terhadap norma, K3LH, dan POS yang
              berlaku di dunia kerja.
            </p>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <button class="desc1">Penerapan Hardskills</button><i class="fa-solid fa-plus my-icon" style="float: right;"></i>
          <hr />
          <div class="desc1">
            <p>
              Pada akhir fase, peserta didik mampu menerapkan kompetensi teknis
              pada pekerjaan sesuai POS yang berlaku di dunia kerja.
            </p>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <button class="desc1">
            Peningkatan dan pengembangan hard skills
          </button><i class="fa-solid fa-plus my-icon" style="float: right;"></i>
          <hr />
          <div class="desc1 content1">
            <p>
              Pada akhir fase, peserta didik mampu menerapkan kompetensi teknis
              baru dan/ atau kompetensi teknis yang belum tuntas dipelajari
              sesuai konsentrasi keahlian.Pada akhir fase, peserta didik mampu
              menerapkan etika berkomunikasi secara lisan dan tulisan,
              integritas (antara lain jujur
            </p>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <button class="desc1">Penyiapan kemandirian berwirausaha</button><i class="fa-solid fa-plus my-icon" style="float: right;"></i>
          <hr />
          <div class="desc1 content1">
            <p>
              Pada akhir fase, peserta didik mampu melakukan analisis usaha
              secara mandiri.
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="garis"></div>
          <h2 class="judul1 mt-3" style="font-weight: 600">Sekolah Pengguna</h2>
        </div>
      </div>
      <div class="row" style="margin-top: 30px">
        <div class="col-4">
          <div class="card">
            <img style="width: 50%; margin: auto auto;" src="https://www.smkn11bdg.sch.id/src/images/11.png">
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img style="width: 50%; margin: auto auto;" src="https://www.smkn11bdg.sch.id/src/images/11.png">
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img style="width: 50%; margin: auto auto;" src="https://www.smkn11bdg.sch.id/src/images/11.png">
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer" style="margin-top: 50px">
      <div class="container-fluid" style="background: #395b64; height: 25rem;">
        <div class="row">
          <div class="col-4">
            <img src="assets/img/logo e-prakerin white.png"style="width: 50%"/>
            <p class="ftext" style="margin-left: 20px; margin-top: -35px;">
              E-Prakerin merupakan Sistem Informasi Pendaftaran dan Pengelolaan
              Praktek Kerja Lapangan
            </p>
          </div>
          <div class="col-4 mt-5">
            <p class="ftext" style="font-weight: 600;">EMAIL</p>
            <p class="ftext mt-1">eprakerin@gmail.com</p>
            <br>
            <p class="ftext" style="font-weight: 600;">ALAMAT</p>
            <p class="ftext mt-1">Jln. Soekarno-Hatta, No. 522 Jawa Barat Kel/Ds. Kec. Buahbatu (Margacinta) - Bandung Jawa Barat.</p>
          </div>
          <div class="col-4 mt-5">
            <p class="ftext" style="font-weight: 600;">KERJA SAMA</p>
            <img style="width: 40%; margin-top: -35px;" src="https://lsp.unimed.ac.id/img/bnsp.png">
          </div>
        </div>

        <div class="row">
          <div style="border: solid #C4C4C4; width: 75%; margin: 70px auto 0 auto;"></div>
          <p class="ftext" style="text-align: center;">Copyright Team NCT</p>
        </div>
      </div>
    </div>
    <script>
    //on scroll navbar
    $(function () {
      $(document).scroll(function () {
       var $nav = $(".navbar-fixed-top");
       $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });
    
    //collapsible teks
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }


    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Raport Diagnostik</title>
    @include('kurikulum.template.header')

    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <style>
        body{
        background-color: #00022F;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
        }

        svg {
        float: right;
        margin-left: -25px;
        margin-right: 15px;
        margin-top: -37px;
        position: relative;
        z-index: 2;
        }
    </style>
</head>

<body>
   <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="{{asset('template/img/undraw_login_re_4vu2.svg')}}"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
         <form class="user" action="/postlogin" method="post">
            <center><img src="{{asset('template/img/20230131_170949.png')}}" style="width: 275px;"><h3 class="mb-5" style="color: white;">Selamat Datang!</h3></center>
            @if ($gagal = Session::get('gagal-login'))
    <div class="alert alert-warning d-flex align-items-center" role="alert">
      <i class="fa-solid fa-triangle-exclamation mr-3"></i>
  <div>
   <center> {{ $gagal }} </center>
  </div>
</div>
    @endif                                 
            @csrf
                          <div class="form-group">
                              <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" required>
                          </div>
                          <div class="form-group"  id="show_hide_password">
                              <input type="password" name="password" class="form-control form-control-user" placeholder="Password" id="password" required />
                              <svg id="Layer_1" onclick="togglePass()" data-name="Layer 1" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>eye-glyph</title><path d="M320,256a64,64,0,1,1-64-64A64.07,64.07,0,0,1,320,256Zm189.81,9.42C460.86,364.89,363.6,426.67,256,426.67S51.14,364.89,2.19,265.42a21.33,21.33,0,0,1,0-18.83C51.14,147.11,148.4,85.33,256,85.33s204.86,61.78,253.81,161.25A21.33,21.33,0,0,1,509.81,265.42ZM362.67,256A106.67,106.67,0,1,0,256,362.67,106.79,106.79,0,0,0,362.67,256Z"/></svg>
                              <svg id="Layer_2" onclick="togglePass()" data-name="Layer 2" width="25" xmlns="http://www.w3.org/2000/svg" style='display: none' viewBox="0 0 512 512"><title>eye-disabled-glyph</title><path d="M409.84,132.33l95.91-95.91A21.33,21.33,0,1,0,475.58,6.25L6.25,475.58a21.33,21.33,0,1,0,30.17,30.17L140.77,401.4A275.84,275.84,0,0,0,256,426.67c107.6,0,204.85-61.78,253.81-161.25a21.33,21.33,0,0,0,0-18.83A291,291,0,0,0,409.84,132.33ZM256,362.67a105.78,105.78,0,0,1-58.7-17.8l31.21-31.21A63.29,63.29,0,0,0,256,320a64.07,64.07,0,0,0,64-64,63.28,63.28,0,0,0-6.34-27.49l31.21-31.21A106.45,106.45,0,0,1,256,362.67ZM2.19,265.42a21.33,21.33,0,0,1,0-18.83C51.15,147.11,148.4,85.33,256,85.33a277,277,0,0,1,70.4,9.22l-55.88,55.88A105.9,105.9,0,0,0,150.44,270.52L67.88,353.08A295.2,295.2,0,0,1,2.19,265.42Z"/></svg>
                          </div>                      
                         <button type="submit" class="btn btn-primary btn-user btn-block mt-5">Masuk</button>
                         <a href="/" class="btn btn-danger btn-user btn-block"><i class="fa-solid fa-arrow-left"></i> Kembali</a>                             
        </form>
        
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.js"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

<script>
      var x = document.getElementById("password");   // Input
var s = document.getElementById("Layer_1");               // Show pass
var h = document.getElementById("Layer_2");               // Hide pass

function togglePass() {
    if (x.type === "password") {
        x.type = 'text';
        s.style.display = 'none';
        h.style.display = 'inline';
    } else {
        x.type = 'password';
        s.style.display = 'inline';
        h.style.display = 'none';
    }   
}
    </script>

</html>
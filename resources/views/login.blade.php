<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .button-login {
        background: #75a0a9;
        border-radius: 50px;
        width: 120px;
        height: 40px;
        border-color: transparent;
        text-align: center;
      }
      .lingkaran {
        width: 20%;
        border-radius: 50%;
        background: #75a0a9;
        margin: 0 auto;
        margin-top: 8%;
      }
      * {
        font-family: "Montserrat", sans-serif;
      }
      .inputan {
        width: 90%;
        margin-left: 15%;
        margin-top: 5%;
        border-width: 3px;
        height: 40px;
        border-radius: 7px;
        border-color: #c4c4c4;
        font-size: 14px;
        font-weight: 500;
      }
      .card {
        width: 32%;
        margin: 70px auto;
        height: 50%;
        border-radius: 22px;
        border-color: #c4c4c4;
        border-width: 2px;
      }
      .welcome {
        font-size: 20px;
        margin-top: 35px;
        font-weight: 700;
        text-align: center;
      }

      svg {
        float: right;
        margin-left: -25px;
        margin-top: -30px;
        position: relative;
        z-index: 2;
}
    </style>
  </head>
  <body style="background-color: #28404d">
    <div class="card">
      <div class="row">
        <div class="col">
          <div class="lingkaran">
            <img
              src="{{ asset('assets/img/E-Prakerin.png') }}"
              style="width: 100%; margin-top: -5px"
            />
          </div>
          <p class="welcome">WELCOME TO E-PRAKERIN</p>
        </div>
      </div>
      <form action="{{ route('postlogin') }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-10" id="show_hide_password">
          <input
            type="text"
            name="username"
            class="form-control inputan"
            placeholder="Username"
          />
          <input
            type="password"
            name="password"
            class="form-control inputan"
            placeholder="Password"
            id="password"
          />
          <svg id="Layer_1" onclick="togglePass()" data-name="Layer 1" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>eye-glyph</title><path d="M320,256a64,64,0,1,1-64-64A64.07,64.07,0,0,1,320,256Zm189.81,9.42C460.86,364.89,363.6,426.67,256,426.67S51.14,364.89,2.19,265.42a21.33,21.33,0,0,1,0-18.83C51.14,147.11,148.4,85.33,256,85.33s204.86,61.78,253.81,161.25A21.33,21.33,0,0,1,509.81,265.42ZM362.67,256A106.67,106.67,0,1,0,256,362.67,106.79,106.79,0,0,0,362.67,256Z"/></svg>
          <svg id="Layer_2" onclick="togglePass()" data-name="Layer 2" width="25" xmlns="http://www.w3.org/2000/svg" style='display: none' viewBox="0 0 512 512"><title>eye-disabled-glyph</title><path d="M409.84,132.33l95.91-95.91A21.33,21.33,0,1,0,475.58,6.25L6.25,475.58a21.33,21.33,0,1,0,30.17,30.17L140.77,401.4A275.84,275.84,0,0,0,256,426.67c107.6,0,204.85-61.78,253.81-161.25a21.33,21.33,0,0,0,0-18.83A291,291,0,0,0,409.84,132.33ZM256,362.67a105.78,105.78,0,0,1-58.7-17.8l31.21-31.21A63.29,63.29,0,0,0,256,320a64.07,64.07,0,0,0,64-64,63.28,63.28,0,0,0-6.34-27.49l31.21-31.21A106.45,106.45,0,0,1,256,362.67ZM2.19,265.42a21.33,21.33,0,0,1,0-18.83C51.15,147.11,148.4,85.33,256,85.33a277,277,0,0,1,70.4,9.22l-55.88,55.88A105.9,105.9,0,0,0,150.44,270.52L67.88,353.08A295.2,295.2,0,0,1,2.19,265.42Z"/></svg>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-5 mb-5" style="text-align: center">
          <button type="submit" class="button-login">
          <p style="color: white; font-weight: 600; font-size: 20px">Login</p>
          </button>
        </div>
      </div>
    </form>
      <div class="row">
        <div class="col">
          <div></div>
        </div>
      </div>
    </div>  

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

    

<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

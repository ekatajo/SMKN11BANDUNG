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
      <div class="row">
        <div class="col-10">
          <input
            type="text"
            class="form-control inputan"
            placeholder="Username"
          />
          <input
            type="password"
            class="form-control inputan"
            placeholder="Password"
          />
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-5 mb-5" style="text-align: center">
          <button type="button" class="button-login">
            <p style="color: white; font-weight: 600; font-size: 20px">Login</p>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div></div>
        </div>
      </div>
    </div>

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

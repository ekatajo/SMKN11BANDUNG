<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .cube {
            margin: 0 auto;
            margin-top: 70px; 
            position: relative;
            width: 75%;
            height: 50%;
            border: dashed 3px #C4C4C4;
            }

        .cube:after {
            content: "";
            display: block;
            padding-bottom: 50%;
            }

        .content {
            position: absolute;
            width: 100%;
            height: 100%;
            }

        .header-upload {
            margin-top: 200px;
            font-size: 30px;
        }

        .upload-area {
            margin-left: 50px;
            margin-top: 30px;
        }
        
        .fa-arrow-left {
            font-size: 30px;
        }

        .upload-button {
            margin-top: 100px;
        }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row ml-5 mt-5">
            <div class="col">
                <a href="#"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
            </div>
        </div>
    <div class="cube">
        <div class="content">
            <div class="row text-center header-upload">
                <div class="col">
                    <i class="fa-solid fa-file-arrow-up"></i> <span>Masukkan File!</span>
                </div>
            </div>
            <div class="row text-center upload-area">
                <div class="col">
                    <input type="file" accept="csv">
                </div>
            </div>
            <div class="row text-right upload-button mr-2">
                <div class="col">
                    <button type="button" class="btn btn-secondary mt-4 mb-5">Upload!</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
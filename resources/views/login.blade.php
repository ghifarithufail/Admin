<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Husein Fadlullah</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(201, 77, 64);
        }
        .img-fluid{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            margin-left: -13px;
            height: 500px;
        }
        .row{
            background: white;
            border-radius: 30px;
        }
        .btn{
            width: 100%;
            padding-bottom: 5px;
        }
        .back{
            margin-top: 10px;
        }
    </style>
  </head>
  <body>
    <section class="Form my-4 mx-5 mt-5">
        <div class="container bodi">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="{{asset('atlantis-lite-master\back/img/admin.jpg')}}" class="img-fluid">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold">WELCOME ADMIN</h1>
                    <h4>Signt into your account</h4>
                    <form action="/loginuser" method="post">
                      @csrf
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="no_telpon" class="form-control my-3 p-3" placeholder="No-Telpon">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" class="form-control my-3 p-3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                    <button type="submit" class="btn btn-outline-danger text-black">Login</button>
                                    {{-- <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--My animate CSS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Husein</title>

        <link rel="stylesheet" href="{{asset('template\assets/css/main.css')}}">

        <link rel="stylesheet" href="{{asset('template\assets/css/index.css')}}">
    </head>
    <body>
        <!-- navbar -->
            @include('front.includes.header')
        <!-- end navbar -->

        <div class="container-fluid banner">
            <div class="container text-center">
                <h4 class="display-4 text-capitalize fw-bold">Berita</h4>
            </div>
        </div>

        <!-- pencapaian section -->
        <section id="pencapaian">
                <div class="container p-3" data-aos="fade-up-right">
                    @yield('content-berita')
                </div>
        </section>
        <!-- end pencapaian section -->

        <!-- span section -->
            <section id="span" class="spann">
                <div class="container p-4">
                    <div class="text-center" data-aos="fade-up-left">
                        <img src="{{asset('template\assets/images/gerindra.jpg')}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </section>
        <!-- end span section -->

                <!-- Footer -->
                @include('front.includes.footer')
                <!-- end Footer -->

                @include('front.includes.js')
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>

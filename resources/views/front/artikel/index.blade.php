<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>PILEG NIH</title>

        <link rel="stylesheet" href="{{asset('template\assets/css/main.css')}}">
    </head>
    <body>
        <!-- navbar -->
            @include('front.artikel.header')
        <!-- end navbar -->

        <!-- pencapaian section -->
        <section id="pencapaian">
                <div class="container p-3">
                    @yield('content')
                </div>
        </section>
        <!-- end pencapaian section -->

        <!-- Footer -->
        @include('front.includes.footer')
        <!-- end Footer -->

        @include('front.includes.js')
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>

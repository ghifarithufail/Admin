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

        <link rel="stylesheet" href="{{asset('template\assets/css/aspirasi.css')}}">
    </head>
    <body>
        <!-- navbar -->
            @include('front.includes.header')
        <!-- end navbar -->
        <div class="container">
            <div class="aspirasi" data-aos="fade-right">
                <h1 class="title text-uppercase">Kolom Aspirasi</h1>
    
                <div class="container">
                    <form action="/aspirasi-store" method="POST" enctype="multipart/form-data" class="contact-form row">
                        @csrf
                        <div class="form-field col-lg-12">
                            <input id="name" type="text" class="input-text" name="name" required>
                            <label for="name" class="label"><i class="fas fa-user"></i> Nama Lengkap</label>
                            @error('name')
                                <div class="alert alert-danger">{{ $message = 'nama harus di isi'}}</div>
                            @enderror
                        </div>
                        <div class="form-field col-lg-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat">   </textarea>
                            @error('alamat')
                                <div class="alert alert-danger">{{ $message = 'alamat harus di isi'}}</div>
                            @enderror
                        </div>
                        <div class="form-field col-lg-12">
                            <label for="aspirasi" class="form-label">Aspirasi</label>
                            <textarea class="form-control" name="aspirasi">   </textarea>
                            @error('aspirasi')
                                <div class="alert alert-danger">{{ $message = 'Aspirasi harus di isi'}}</div>
                            @enderror
                        </div>
                        <div class="form-field col-lg-12">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message = 'gambar maximal size 1MB'}}</div>
                            @enderror
                        </div>
    
                        <button type="submit" class="kirim col-lg-12"><i class="fas fa-paper-plane"></i> Kirim</button>
    
                        
                    </form>
                </div>
            </div>
        </div>
        
        {{-- end aspirasi form --}}

        <!-- span section -->
            <section id="span" class="spann">
                <div class="container p-4">
                    <div class="text-center" data-aos="fade-left">
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

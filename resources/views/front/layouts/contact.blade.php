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

        <link rel="stylesheet" href="{{asset('template\assets/css/contacts.css')}}">
    </head>
    <body>
        <!-- navbar -->
            @include('front.includes.header')
        <!-- end navbar -->

        <section id="contact" class="contact">
            <!-- Container -->
            <div class="container mt-5">
                <!-- Row -->
                <div class="row">
                    <div class="col">
                        <form action="POST" class="form-inline" data-aos="fade-right">
                            <p class="fw-bold h2">Get In Touch</p>
                            <p>
                                <img src="{{asset('template\assets/images/icons8-pin-30.png')}}" alt=""> 803 Bhayangkara St., Jatinegara. JKT.53282
                            </p>
                            <p>
                                <img src="{{asset('template\assets/images/icons8-phone-30.png')}}" alt=""> (+62) 123 456 7890
                            </p>
                            <p>
                                <img src="{{asset('template\assets/images/icons8-iphone-se-30.png')}}" alt=""> (+62) 123 456 7891
                            </p>
                            <div class="mb-2">
                                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Full Name">
                            </div>
                            <div class="mb-2">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Email Address">
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control" placeholder="Write your messages here" name="" id=""
                                    cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-lg mb-5">Submit</button>
                        </form>
                    </div>
                    <div class="busloc col-lg-6" data-aos="fade-left">
                        <div class="row-cols-auto">
                            <div class="col-10 w-100">
                                <div class="map-responsive m-4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.36742707412!2d106.86883591444705!3d-6.215180062605829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f482865cb813%3A0xdccfec8b3c73978c!2sSt%20Ka%20Jatinegara!5e0!3m2!1sen!2sid!4v1669959245019!5m2!1sen!2sid" 
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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

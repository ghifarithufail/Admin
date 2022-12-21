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

        <link rel="stylesheet" href="{{asset('template\assets/css/tentang.css')}}">
    </head>
    <body>
        <!-- navbar -->
            @include('front.includes.header')
        <!-- end navbar -->

        <div class="container-fluid banner">
            <div class="container text-center">
                <h4 class="display-4 text-capitalize fw-bold">Tentang Saya</h4>
            </div>
        </div>
        <!-- ISIIIII -->

        <div class="container-fluid isi pt-5 pb-5 isi">
            <div class="container" >
                <h2 class="display-4 text-capitalize text-center fw-semibold" >Muhammad Husein Fadlulloh </h2>
                    
    
                <div class="clearfix mt-5" data-aos="fade-up-right">
                    <img src="{{asset('template\assets/images/husein_bndr.jpeg')}}" class="col-md-6 col-lg-4 col-xl-3 col-sm-5 float-end mb-3 ms-md-3 img-fluid rounded-2" alt="...">
                        <p>
                            A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
                        </p>
                        <p>
                            As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
                        </p>
                        <p>
                            And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
                        </p>
                        <p>
                            As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
                        </p>
                        <p>
                            As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
                        </p>
                </div>
    
                <div data-aos="fade-up-right">
                
                    <p class="text-center pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        In dignissim justo ut ex feugiat aliquet. Mauris convallis mollis lobortis. Quisque elit libero, semper et nisl at, placerat porttitor massa. Etiam faucibus tortor a sodales convallis. Cras in turpis interdum, rutrum ante eu, fermentum mi. 
                        Ut justo quam, ullamcorper at sapien vitae, tincidunt fringilla ligula. Etiam cursus commodo porta.
                    </p>
    
                    <p class="text-center pt-4">
                        Aliquam erat volutpat. Maecenas volutpat lorem sem, blandit hendrerit diam tristique auctor. 
                        Fusce rutrum augue sapien. Mauris in quam dapibus, vehicula sem tincidunt, vestibulum dui. 
                        Sed vehicula, dolor nec facilisis pharetra, magna lorem rhoncus ante, in maximus dolor urna et massa. 
                        Ut cursus cursus lacus, congue porta ante imperdiet ac. Morbi dui sem, viverra eu metus ut, rhoncus dictum dolor. 
                        Etiam et nibh sem. Phasellus eu eros feugiat, semper dui nec, tincidunt sem. Morbi nec imperdiet tortor. 
                        Etiam mattis a orci eget lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Vestibulum odio nisi, laoreet ut erat eget, facilisis pharetra magna. Phasellus ultrices turpis neque, in auctor ante lacinia at. 
                        In ultrices mollis nisi ut lacinia.
                    </p>
    
            
                </div>
                <div class=" c1 container-fluid py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mb-3 text-center">
                                <a href="{{route('galerii')}}" style="text-decoration: none" class="link-dark"><h1 class="text-center">Beberapa Kegiatan Saya</h1></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-right">
                                <img src="{{asset('template\assets/images/2.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-left">
                                <img src="{{asset('template\assets/images/2.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-right">
                                <img src="{{asset('template\assets/images/3.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-left">
                                <img src="{{asset('template\assets/images/4.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-right">
                                <img src="{{asset('template\assets/images/5.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-left">
                                <img src="{{asset('template\assets/images/6.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-right">
                                <img src="{{asset('template\assets/images/11.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-left">
                                <img src="{{asset('template\assets/images/22.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-right">
                                <img src="{{asset('template\assets/images/33.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                            <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-left">
                                <img src="{{asset('template\assets/images/44.png')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1 col-sm-12 mt-3" data-aos="fade-right">
                                <img src="{{asset('template\assets/images/111.png')}}" alt="" class="img-fluid rounded-3">
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 mt-3" data-aos="fade-left">
                                <img src="{{asset('template\assets/images/222.png')}}" alt="" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-up">
                    <p class="text-center pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        In dignissim justo ut ex feugiat aliquet. Mauris convallis mollis lobortis. Quisque elit libero, semper et nisl at, placerat porttitor massa. Etiam faucibus tortor a sodales convallis. Cras in turpis interdum, rutrum ante eu, fermentum mi. 
                        Ut justo quam, ullamcorper at sapien vitae, tincidunt fringilla ligula. Etiam cursus commodo porta.
                    </p>
                    <p class="text-center pt-4">
                        Aliquam erat volutpat. Maecenas volutpat lorem sem, blandit hendrerit diam tristique auctor. 
                        Fusce rutrum augue sapien. Mauris in quam dapibus, vehicula sem tincidunt, vestibulum dui. 
                        Sed vehicula, dolor nec facilisis pharetra, magna lorem rhoncus ante, in maximus dolor urna et massa. 
                        Ut cursus cursus lacus, congue porta ante imperdiet ac. Morbi dui sem, viverra eu metus ut, rhoncus dictum dolor. 
                        Etiam et nibh sem. Phasellus eu eros feugiat, semper dui nec, tincidunt sem. Morbi nec imperdiet tortor. 
                        Etiam mattis a orci eget lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                        Vestibulum odio nisi, laoreet ut erat eget, facilisis pharetra magna. Phasellus ultrices turpis neque, in auctor ante lacinia at. 
                        In ultrices mollis nisi ut lacinia.
                    </p>
                </div>
            </div>
        </div>
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

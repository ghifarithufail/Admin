<nav class="navbar navbar-expand-lg navigation-wrap ">
    <div class="container-fluid">
        <a class="navbar-brand link-light" href="{{url('/')}}">Husein Fadlulloh</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="{{asset('template\assets/images/menu-bar.png')}}" alt=""></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link link-warning" aria-current="true" href="{{url('/')}}">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-warning" href="{{url('/tentangSaya')}}">Tentang Saya</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-warning" href="{{url('/berita')}}">Berita & Opini</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-warning" href="{{url('/galerii')}}">Galeri Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-warning" href="/aspirasii">Kolom Aspirasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-warning" href="/contact">Kontak Saya</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-warning" href="{{asset('login')}}">Login</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
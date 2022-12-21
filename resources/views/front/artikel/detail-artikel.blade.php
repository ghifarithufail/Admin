@extends('front.artikel.index')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <img src="{{asset('uploads/' . $artikel->gambar_artikel)}}" alt="" class="img-fluid">
            <div class="card-body">
                <h2 class="card-title text-center mt-3 mb-3">{{$artikel->judul}}</h2>
                <p class="card-text m-3">{!!$artikel->body!!}</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
            </div>
        </div>
    </div>
@endsection
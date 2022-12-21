@extends('front.layouts.frontend')

{{-- row-col-1 row-col-md-3 g-4 --}}
@section('content')
    <style>
    .cutoff-text{
        --max-lines: 3;

        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: var(--max-lines);
    }
    </style>
    <a href="{{route('berita')}}" style="text-decoration: none" class="link-dark"><h1 class="text-center">Berita</h1></a>
    <div class="row gy-1 my-1">
        @forelse ($artikel as $row)
                    <div class="mt-3 mb-3 col-md-6 col-xl-3 col-lg-3 col-sm-6">
                        <div class="card" style="height: 27rem;" >
                            <img src="{{asset('uploads/' . $row->gambar_artikel)}}" class="card-img-top" height="200px">
                            <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="{{route('detail-artikel', $row->judul)}}" style="text-decoration: none" class="link-dark">    
                                    <strong>{{$row->judul}}</strong>
                                </a>
                            </h5>
                            <p class="cutoff-text card-text text-black text-center" style="font-size: 15px; ">{!!$row->body!!}</p>
                            </div>
                        </div>
                    </div>
        @empty
            <p>Data masih kosong</p>
        @endforelse
    </div>
@endsection
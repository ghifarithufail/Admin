@extends('front.layouts.berita')

{{-- row-col-1 row-col-md-3 g-4 --}}
@section('content-berita')
<style>
    .cutoff-text{
        --max-lines: 7;

        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: var(--max-lines);
    }
    .title{
        --max-lines: 1;

        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: var(--max-lines);
    }
</style>
    <h1 class="text-center m-3">Berita</h1>
    <div class="row gy-1 my-1">
        @forelse ($artikel as $row)
                <div class="mt-5 mb-3 col-md-6 col-xl-3 col-lg-3 col-sm-6">
                    <div class="card" style="height: 30rem;">
                        <img src="{{asset('uploads/' . $row->gambar_artikel)}}" class="card-img-top" height="200px">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="{{route('detail-artikel', $row->judul)}}" style="text-decoration: none" class="title link-dark">    
                                    <strong>{{$row->judul}}</strong>
                                </a>
                            </h5>
                            <p class="cutoff-text card-text text-black text-center" style="font-size: 15px">{!!$row->body!!}</p>
                        </div>
                        <div class="card-footer text-muted">
                            {{$row->created_at}}
                        </div>
                    </div>
                </div>
        @empty
            <p>Data masih kosong</p>
        @endforelse
        {{$artikel->links()}}
    </div>
@endsection
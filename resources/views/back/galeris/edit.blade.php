@extends('layout.default')
@section('content')
    <div class="panel-header">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Edit Gambar  {{$galeri->judul}}</div>
                            <a href="{{ route('galeri.index')}}" class="btn btn-primary btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="{{route('galeri.update', $galeri->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Gambar</label>
                                <input type="text" class="form-control" id="text" name="judul" value="{{$galeri->judul}}">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" name="body">{{$galeri->body}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Galeri</label>
                                <input type="file" class="form-control" name="gambar">
                                <br>
                                <label for="gambar" class="form-label">Gambar Galeri Saat Ini</label>
                                <br>
                                <img src="{{asset('uploads/' . $galeri->gambar)}}" width="100">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Add</button>
                            <button type="reset" class="btn btn-danger mt-3">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
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
                            <div class="card-title">Edit Form Kategori <i>{{$kategori->nama_kategori}}</i></div>
                            <a href="{{ route('kategori.index')}}" class="btn btn-primary btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="{{route('kategori.update', $kategori->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="text" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
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
                            <div class="card-title">Edit Artikel  {{$artikel->judul}}</div>
                            <a href="{{ route('artikel.index')}}" class="btn btn-primary btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="{{route('artikel.update', $artikel->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control" id="text" name="judul" value="{{$artikel->judul}}">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" name="body">{{$artikel->body}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    @foreach ($kategori as $row)
                                        @if ($row->id == $artikel->kategori_id)
                                            <option value={{$row->id}} selected='selected'>{{$row->nama_kategori}}</option>
                                        @else
                                        <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                        @endif
                                    
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Artikel</label>
                                <input type="file" class="form-control" name="gambar_artikel">
                                <br>
                                <label for="gambar" class="form-label">Gambar Artikel Saat Ini</label>
                                <br>
                                <img src="{{asset('uploads/' . $artikel->gambar_artikel)}}" width="100">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" name="is_active">
                                    <option value="1" {{$artikel->is_active == '1' ? 'selected' : ''}}>Publish</option>
                                    <option value="0" {{$artikel->is_active == '0' ? 'selected' : ''}}>Draft</option>
                                </select>
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
    
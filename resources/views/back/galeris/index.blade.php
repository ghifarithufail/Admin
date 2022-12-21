@extends('layout.default')
@section('content')
<style>
    .edit{
        width: 90px;
    }

    .delete{
        width: 90px;
    }
</style>
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
                            <div class="card-title">Data Galeri</div>
                            <a href="{{ route('galeri.create')}}" class="btn btn-primary btn-sm ml-auto">Tambah Foto</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-primary">
                                {{Session('success')}}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>judul</th>
                                        <th>Body</th>
                                        <th>Author</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($galeri as $row)
                                        <tr>
                                            <td>{{  $row->id }}</td>
                                            <td>{{  $row->judul }}</td>
                                            <td>{{  $row->body }}</td>
                                            <td>{{  $row->users->name }}</td>
                                            <td><img src="{{asset('uploads/' . $row->gambar)}}" width="100"></td>
                                            <td>
                                                <a href="{{route('galeri.edit', $row->id)}}" class="btn btn-warning btn-sm edit">Edit</a>
                                                
                                                <form action="{{route('galeri.destroy', $row->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm delete">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Data not found</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
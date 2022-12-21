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
                            <div class="card-title">Data Artikel</div>
                            <a href="{{ route('artikel.create')}}" class="btn btn-primary btn-sm ml-auto">Tambah Artikel</a>
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
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>judul</th>
                                        <th>Body</th>
                                        <th>Kategori</th>
                                        <th>Author</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                        <th>Tanggal Pembuatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                        @endphp
                                    @forelse ($artikel as $data => $row)
                                        <tr>
                                            <th scope=>{{$data + $artikel ->firstItem()}}</th>
                                            <td>{{  $row->id }}</td>
                                            <td>{{  $row->judul }}</td>
                                            <td>{{  $row->body }}</td>
                                            <td>{{  $row->kategori->nama_kategori }}</td>
                                            <td>{{  $row->users->name }}</td>
                                            <td><img src="{{asset('uploads/' . $row->gambar_artikel)}}" width="100"></td>
                                            <td>
                                                <a href="{{route('artikel.edit', $row->id)}}" class="btn btn-warning btn-sm edit">Edit</a>
                                                
                                                <form action="{{route('artikel.destroy', $row->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm delete">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{  $row->created_at }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Data not found</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                            {{$artikel->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
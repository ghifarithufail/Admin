@extends('layout.default')
@section('content')
<style>
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
                                        <th>nama</th>
                                        <th>alamat</th>
                                        <th>aspirasi</th>
                                        <th>Gambar Aspirasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataAS as $row)
                                        <tr>
                                            <td>{{  $row->id }}</td>
                                            <td>{{  $row->name }}</td>
                                            <td>{{  $row->alamat }}</td>
                                            <td>{{  $row->aspirasi }}</td>
                                            <td><img src="{{asset('uploads/' . $row->gambar)}}" width="150"></td>
                                            <td>
                                                <a href="/deleteAS/{{$row->id}}" class="btn btn-danger delete m-1" data-id="{{$row->id}}" data-calon="{{$row->nama}}">Delete</a>
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
    
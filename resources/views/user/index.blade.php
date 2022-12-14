@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="kontaner ml-3">

  <div class="judul text-center">
    <h1 class="text-center mb-4 mt-5 text-bold">Data User</h1>
  </div>
  <div class="input-group">
    <a href="/register" type="button" class="btn btn-success">Tambah +</a>
    <form action="/pdf-user" method="POST" target="__blank">
      @csrf
      <button class="btn btn-danger ml-2" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
    </form>
  </div>
  
  <table class="table table-hover">
          <form action="/user" method="GET">
            <input type="search" id="inputPassword6" placeholder="Cari User" name="search" class="form-control mt-3" aria-describedby="passwordHelpInline">
          </form>
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID</th>
            <th scope="col">email</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Role</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($user as $data => $row)
        <tr>
          <th scope="row">{{$data + $user->firstItem()}}</th>
          <td>{{$row->name}}</td>
          <td>{{$row->id}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->no_telpon}}</td>
            <td>{{$row->role}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
              <a href="/user-update/{{$row->id}}" class="btn btn-warning edit m-1">Edit</a>
              <a href="#" class="btn btn-danger delete m-1" data-id="{{$row->id}}" data-calon="{{$row->name}}">Delete</a>
            </td>
            @endforeach
        </tr>
        </tbody>
    </table>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.delete').click(function(){
            var user_id = $(this).attr('data-id');
            var user = $(this).attr('data-calon');
            swal({
                title: "Kamu Yakin?",
                text: "Ingin delete "+user+" !!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                window.location = "/deleteU/"+user_id+""
                swal("Berhasil! Data ini Berhasil dihapus!", {
                icon: "success",
                });
            }
            });
        });
    </script>
    <script>
        @if(Session::has('sukses'))
            toastr.success('{{ Session::get('sukses') }}')
        @endif
    </script>
{{$user->links()}}

@endsection
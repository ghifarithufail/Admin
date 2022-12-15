@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="kontaner ml-3">

  <div class="judul text-center">
    <h1 class="text-center mb-4 mt-5 text-bold">Koordinator Desa</h1>
  </div>

  <div class="input-group">
    <a href="/koordinator-desa-create" type="button" class="btn btn-success">Tambah +</a>
    <form action="/pdf-kordes" method="POST" target="__blank">
      @csrf
      <button class="btn btn-danger ml-2" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
    </form>
  </div>
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
      </div>
    </div>
    
    <table class="table table-hover">
      <div class="input-group">
        <form action="/koordinator-desa" method="GET">
          <input type="search" id="inputPassword6" placeholder="Cari Koordinator Desa" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
        <form action="/koordinator-desa-cari" method="GET">
          <input type="search" id="inputPassword6" placeholder="Cari Desa" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID</th>
            {{-- <th scope="col">Koordinator Kecamatan</th> --}}
            <th scope="col">Desa</th>
            <th scope="col">Koordinator Kecamatan</th>
            <th scope="col">Deskripsi Kecamatan</th>
            <th scope="col">Dapil</th>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($Koord_desa as $data => $row)
        <tr>
          <th scope="row">{{$data + $Koord_desa->firstItem()}}</th>
            <td>{{$row->nama}}</td>
            <td>{{$row->id}}</td>
            {{-- <td>{{$row->Koord_kecamatans->nama}}</td> --}}
            <td>{{$row->deskripsi}}</td>
            <td>{{$row->Koord_kecamatans->nama}}</td>
            <td>{{$row->Koord_kecamatans->deskripsi}}</td>
            <td>{{$row->dapil}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
                <a href="/koordinator-desa-update/{{$row->id}}" class="btn btn-warning edit m-1">Edit</a>
                <a href="#" class="btn btn-danger delete m-1" data-id="{{$row->id}}" data-calon="{{$row->nama}}">Delete</a>
            </td>
        </tr>
         @endforeach
        </tbody>
    </table>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.delete').click(function(){
            var KD_id = $(this).attr('data-id');
            var KD = $(this).attr('data-calon');
            swal({
                title: "Kamu Yakin?",
                text: "Ingin delete "+KD+" !!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                window.location = "/deleteKD/"+KD_id+""
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
{{$Koord_desa->links()}}

@endsection
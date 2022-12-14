@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="card">
  <div class="kontaner ml-3">
    
    <div class="judul text-center">
      <h1 class="text-center mb-4 mt-5 text-bold">Data Balad Husein</h1>
    </div>
    <div class="card-body mt-2">
  
      <form action="/pdf-data-relawan" method="POST" target="__blank">
        @csrf
        <button class="btn btn-danger" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
      </form>
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        
      </div>
    </div>
  
    <table class="table table-hover" width="100%">
      <div class="input-group">
        <form action="/data-relawans" method="GET">
          <input type="search" id="inputPassword6" placeholder="Cari Nama Relawan" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
        <form action="/data-relawan" method="GET">
          <input type="search" id="inputPassword6" placeholder="Cari data User dengan user ID" name="search" class="form-control ml-3" aria-describedby="passwordHelpInline">
        </form>
      </div>
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">User</th>
            <th scope="col">NIK</th>
            <th scope="col">KK</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">status</th>
            <th scope="col">jenis</th>
            <th scope="col">alamat</th>
            <th scope="col">RT</th>
            <th scope="col">RW</th>
            <th scope="col">TPS</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Koordinator Desa</th>
            <th scope="col">Koordinator Kecamatan</th>
            <th scope="col">Verifikasi</th>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($relawan as $data => $row)
        {{-- @if ($row->user->id == Auth::user()->id) --}}
        <tr>
          <th scope="row">{{$data + $relawan->firstItem()}}</th>
            <td>{{$row->nama}}</td>
            <td>{{$row->user->name}}</td>
            <td>{{$row->nik}}</td>
            <td>{{$row->nokk}}</td>
            <td>{{$row->tempat_lahir}}</td>
            <td>{{$row->tgl_lahir}}</td>
            <td>{{$row->status}}</td>
            <td>{{$row->jenis}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->rt}}</td>
            <td>{{$row->rw}}</td>
            <td>{{$row->tps}}</td>
            <td>{{$row->Datakelurahans->kelurahan}}</td>
            <td>{{$row->Koord_desas->nama}}</td>
            <td>{{$row->Koord_desas->Koord_kecamatans->nama}}</td>
            <td>{{$row->is_visible}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
                <a href="/relawan-data-update/{{$row->id}}" class="btn btn-warning edit m-1">Edit</a>
                <a href="#" class="btn btn-danger delete m-1" data-id="{{$row->id}}" data-calon="{{$row->nama}}">Delete</a>
            </td>
        </tr>
          {{-- @endif --}}
         @endforeach
        </tbody>
    </table>
    {{$relawan->links()}}
  </div>
  </div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.delete').click(function(){
            var relawan_id = $(this).attr('data-id');
            var relawan = $(this).attr('data-calon');
            swal({
                title: "Kamu Yakin?",
                text: "Ingin delete "+relawan+" !!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                window.location = "/deleteR/"+relawan_id+""
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
{{-- {{$relawan->links()}} --}}

@endsection
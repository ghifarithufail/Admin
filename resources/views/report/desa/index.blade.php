@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="kontaner ml-3">

  {{-- <div class="judul text-center">
    <h1 class="text-center mb-4 mt-5 text-bold">REPORT KELURAHAN</h1>
  </div>
    <a href="/koordinator-kecamatan-create" type="button" class="btn btn-success">Tambah +</a> --}}
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        {{-- <form action="/koordinator-kecamatan" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form> --}}
      </div>
    </div>
  
    <div class="card">
        <div class="judul text-center">
            <h1 class="text-center mb-4 mt-5 text-bold">REPORT DESA</h1>
          </div>
          <div class="card-body mt-2">
            <form action="/pdf-data-Desa" method="POST" target="__blank">
              @csrf
              <button class="btn btn-danger" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
            </form>
          <table class="table table-hover">
            <div class="input-group">
              <form action="/report-desa" method="GET">
                <input type="search" id="inputPassword6" placeholder="Cari Koodinator Desa" name="search" class="form-control mt-3" aria-describedby="passwordHelpInline">
              </form>
              <form  action="/report-desa-nama" method="GET">
                <input type="search" id="inputPassword6" placeholder="Cari Desa" name="search" class="form-control mt-3 ml-3" aria-describedby="passwordHelpInline">
              </form>
              <form action="/pdf-kordes-detail" method="POST" target="__blank">
                @csrf
                <input type="search" id="inputPassword6" placeholder="PDF Koordinator Desa Dengan ID KORDES" name="search" class="form-control mt-3 ml-3" aria-describedby="passwordHelpInline">
              </form>
            </div>
            <div class="row">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Koordinator Desa</th>
                  <th scope="col">ID</th>
                  {{-- <th scope="col">Desa</th> --}}
                  <th scope="col">Deskripsi Kelurahan/Desa</th>
                  <th scope="col">Total Balad Husein</th>
                </tr>
              </thead>
              <tbody>
              @php
              $no = 1;
              @endphp
              @foreach ($desa as $data => $row)
              <tr>
                <th scope="row">{{$data + $desa->firstItem()}}</th>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->id}}</td>
                  <td>{{$row->deskripsi}}</td>
                  <td>{{$row->data_relawan->count()}}</td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>

      {{$desa->links()}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
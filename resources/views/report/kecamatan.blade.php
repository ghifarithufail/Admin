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
            <h1 class="text-center mb-4 mt-5 text-bold">REPORT KECAMATAN</h1>
          </div>
          <form action="/report-kecamatan" method="GET">
            <input type="search" id="inputPassword6" placeholder="Cari Koodinator Kecamatan" name="search" class="form-control" aria-describedby="passwordHelpInline">
          </form>
          <form  action="/report-kecamatan-nama" method="GET">
            <input type="search" id="inputPassword6" placeholder="Cari Kecamatan" name="search" class="form-control mt-3" aria-describedby="passwordHelpInline">
          </form>
        <div class="card-body mt-2">
          <table class="table table-hover">
            <div class="row">
              <thead>
                <tr>
                  <th scope="col">Koordinator Kecamatan</th>
                  <th scope="col">Deskripsi Kecamatan</th>
                  <th scope="col">Total Desa/Kelurahan</th>
                  <th scope="col">Total Relawan</th>
                </tr>
              </thead>
              <tbody>
              @php
              $no = 1;
              @endphp
              @foreach ($kecamatan as $data)
              <tr>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->deskripsi}}</td>
                  <td>{{$data->desas->count() }}</td>
                  <td>{{$data->relawans->count() }}</td>
                  @endforeach
              </tr>
              </tbody>
          </table>
        </div>
      </div> 
      
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
      {{$kecamatan->links()}}
      @endsection
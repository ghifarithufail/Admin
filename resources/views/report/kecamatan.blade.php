@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="kontaner ml-3">  
    <div class="card">
        <div class="judul text-center">
            <h1 class="text-center mb-4 mt-5 text-bold">REPORT KECAMATAN</h1>
          </div>
          <table class="table table-hover">
            <div class="input-group">
              <form action="/report-kecamatan" method="GET">
                <input type="search" id="inputPassword6" placeholder="Cari Koodinator Kecamatan" name="search" class="form-control" aria-describedby="passwordHelpInline">
              </form>
              <form  action="/report-kecamatan-nama" method="GET">
                <input type="search" id="inputPassword6" placeholder="Cari Kecamatan" name="search" class="form-control" aria-describedby="passwordHelpInline">
              </form>
            </div>
            <div class="row">
              <thead>
                <tr>
                  <th scope="col">No</th>
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
              @foreach ($kecamatan as $data =>$row)
              <tr>
                <th scope="row">{{$data + $kecamatan->firstItem()}}</th>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->deskripsi}}</td>
                  <td>{{$row->desas->count() }}</td>
                  <td>{{$row->relawans->count() }}</td>
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
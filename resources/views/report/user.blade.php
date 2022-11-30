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
            <h1 class="text-center mb-4 mt-5 text-bold">REPORT USER</h1>
          </div>
        <div class="card-body mt-2">
          <form action="/report-user" method="GET">
            <input type="search" id="inputPassword6" placeholder="Cari User" name="search" class="form-control" aria-describedby="passwordHelpInline">
          </form>
          <table class="table table-hover">
            <div class="row">
              <thead>
                <tr>
                  <th scope="col">User</th>
                  <th scope="col">Total relawan</th>
                </tr>
              </thead>
              <tbody>
              @php
              $no = 1;
              @endphp
              @foreach ($user as $data)
              <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->datarelawans->count() }}</td>
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
{{$user->links()}}
@endsection
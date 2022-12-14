@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="kontaner ml-3">
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
      </div>
    </div>
    
    <div class="card">
      <div class="judul text-center">
        <h1 class="text-center mb-4 mt-5 text-bold">PDF REPORT KELURAHAN</h1>
      </div>
      <div class="card-body mt-2">
        <table class="table table-hover">
            <form action="/pdf-kelurahan-detail" method="POST" target="__blank">
                @csrf
                <button class="btn btn-danger" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
              </form>
            <form action="/pdf-kelurahan-detail" method="POST" target="__blank">
                @csrf
                <input type="search" id="inputPassword6" placeholder="Cari Nama Kelurahan" name="search" class="form-control mt-3" aria-describedby="passwordHelpInline">
            </form>
            <div class="row">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">Dapil</th>
                  <th scope="col">TPS</th>
                  <th scope="col">DPT</th>
                  <th scope="col">Target</th>
                  <th scope="col">Total Balad Husein</th>
                </tr>
              </thead>
              <tbody>
              @php
              $no = 1;
              @endphp
              @foreach ($kelurahan as $data => $row)
              <tr>
                <th scope="row">{{$data + $kelurahan->firstItem()}}</th>
                  <td>{{$row->id}}</td>
                  <td>{{$row->kelurahan}}</td>
                  <td>{{$row->dapil}}</td>
                  <td>{{$row->tps}}</td>
                  <td>{{$row->jumlah}}</td>
                  <td>{{$row->target}}</td>
                  <td>{{$row->relawansData->count()}}</td>
                  @endforeach
              </tr>
              </tbody>
          </table>
        </div>
      </div> 
      {{$kelurahan->links()}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
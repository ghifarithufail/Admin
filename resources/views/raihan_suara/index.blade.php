@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="kontaner ml-3">

  <div class="judul text-center">
    <h1 class="text-center mb-4 mt-5 text-bold">Raihan Suara</h1>
  </div>

  <div class="input-group">
    <a href="/raihan-suara-create" type="button" class="btn btn-success">Tambah +</a>
    <form action="/pdf-raihan-suara" method="POST" target="__blank">
      @csrf
      <button class="btn btn-danger ml-2" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
    </form>
  </div>
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
      </div>
    </div>
    
    <table class="table table-hover">
      <form action="/raihan-suara" method="GET">
        <input type="search" id="inputPassword6" name="search" placeholder="Cari Kelurahan dengan ID KELURAHAN" class="form-control" aria-describedby="passwordHelpInline">
      </form>
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Dapil</th>
            <th scope="col">TPS</th>
            <th scope="col">DPT</th>
            <th scope="col">Target</th>
            <th scope="col">jumlah relawan</th>
            <th scope="col">JML Suara</th>
            <th scope="col">Pembuat</th>
            <th scope="col">Waktu</th>
            {{-- <th scope="col">Aksi</th> --}}
          </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($raihan_suara as $data => $row)
        <tr>
            <th scope="row">{{$data + $raihan_suara->firstItem()}}</th>
            <td>{{$row->kelurahans->kelurahan}}</td>
            <td>{{$row->kelurahans->dapil}}</td>
            <td>{{$row->kelurahans->tps}}</td>
            <td>{{$row->kelurahans->jumlah}}</td>
            <td>{{$row->kelurahans->target}}</td>
            <td>{{$row->datarelawans->count()}}</td>
            <td>{{$row->jumlah_suara}}</td>
            <td>{{$row->user->name}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
        </tr>
         @endforeach
        </tbody>
      </table>
      {{$raihan_suara->links()}}

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
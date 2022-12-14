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
            <h1 class="text-center mb-4 mt-5 text-bold">REPORT PDF KOORDINATOR KECAMATAN</h1>
          </div>
          <div class="card-body mt-2">
            <form action="/pdf-korcam-detail" method="POST" target="__blank">
              @csrf
              <button class="btn btn-danger" style="width: 110px" ><i class="fas fa-file mr-1"></i> PDF</button>
            </form>
          <table class="table table-hover">
            <div class="input-group">
              <form action="/pdf-korcam-detail" method="POST" target="__blank">
                @csrf
                <input type="search" id="inputPassword6" placeholder="Cari Koordinator Kecamatan, dengan ID Koordinator Kecamatan" name="search" class="form-control mt-3" aria-describedby="passwordHelpInline">
              </form>
            </div>
            <div class="row">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Koordinator Kecamatan</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Koordinator Desa</th>
                  <th scope="col">Deskripsi Desa</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">TPS</th>
                  {{-- <th scope="col">Total Balad Husein</th> --}}
                </tr>
              </thead>
              <tbody>
              @php
              $no = 1;
              @endphp
              @foreach ($korcam as $data => $row)
              <tr>
                <th scope="row">{{$data + $korcam->firstItem()}}</th>
                  <td>{{$row->Koord_kecamatans->nama}}</td>
                  <td>{{$row->Koord_kecamatans->deskripsi}}</td>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->deskripsi}}</td>
                  <td>{{$row->Datakelurahans->kelurahan}}</td>
                  <td>{{$row->Datakelurahans->tps}}</td>
                  {{-- <td>{{$row->data_relawan->count()}}</td> --}}
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>

      {{$korcam->links()}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
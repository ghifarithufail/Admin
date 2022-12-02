@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('atlantis-lite-master\back/css/home.min.css')}}">
<div class="panel-header" style="background-color: red">
    <div class="page-inner py-5">
      <div>
          <h1 class="text-white pb-2 display-4 fw-bold text-center">Dashboard</h1>
          <h5 class="text-white op-7 mb-2"></h5>
      </div>
    </div>
  </div>
  <div class="page-inner mt--5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body mt-2">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="card card-dark bg-primary-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right">{{$jumlahuser}}</div>
                          <i class="fa fa-user fa-2x ml-1"></i>
                          <h2 class="mt-2 sub-judul">USER</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card card-dark bg-secondary-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right">{{$jumlahkecamatan}}</div>
                          <i class="fa fa-building fa-2x ml-1"></i>
                          <h2 class="mt-1 sub-judul">KOORDINATOR KECAMATAN</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card card-dark bg-danger-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right">{{$jumlahdesa}}</div>
                          <i class="fa fa-university fa-2x ml-1"></i>
                          <h2 class="mt-1 sub-judul">KOORDINATOR DESA</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card card-dark bg-warning-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right">{{$jumlahrelawan}}</div>
                          <i class="fa fa-users fa-2x ml-1"></i>
                          <h2 class="mt-2 sub-judul">RELAWAN</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="card">
  <div class="card-body mt-2">
    <table class="table table-hover">
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Koordinator Kecamatan</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Total Relawan</th>
            <th scope="col">Role</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($kecamatan as $data)
        <tr>
            <th scope="row">{{$data + $kecamatan->firstItem()}}</th>
            <td>{{$data->nama}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>{{$data->relawans_count }}</td>
            <td>{{$data->desas_count }}</td>
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
  </div>
</div> --}}


<div class="card">
  <div class="card-body mt-2">
    <form action="/" method="GET">
      <input type="search"  name="search" class="form-control" placeholder="cari Koordinator desa" aria-describedby="passwordHelpInline">
    </form>
    <table class="table table-hover">
      <div class="row">
        <thead>
          <tr>
            {{-- <th scope="col">No</th> --}}
            <th scope="col">Nama Koordinator Kecamatan</th>
            <th scope="col">Deskripsi Kecamatan</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Koordinator Desa</th>
            <th scope="col">Deskripsi Desa</th>
            <th scope="col">Total Relawan</th>
            {{-- <th scope="col">Role</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th> --}}
          </tr>
        </thead>
        <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($desa as $data)
        <tr>
            {{-- <th scope="row">{{$data + $kecamatan->firstItem()}}</th> --}}
            <td>{{$data->Koord_kecamatans->nama}}</td>
            <td>{{$data->Koord_kecamatans->deskripsi}}</td>
            <td>{{$data->Datakelurahans->kelurahan}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>{{$data->data_relawan->count() }}</td>
            {{-- <td>{{$row->role}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
            <td>
              <a href="/user-update/{{$row->id}}" class="btn btn-warning edit m-1">Edit</a>
              <a href="#" class="btn btn-danger delete m-1" data-id="{{$row->id}}" data-calon="{{$row->name}}">Delete</a>
            </td> --}}
            @endforeach
        </tr>
        </tbody>
    </table>
  </div>
  {{$desa->links()}}
</div>

  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
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
                      <a href="/user">
                      <div class="card card-dark bg-primary-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right text-white">{{$jumlahuser}}</div>
                          <i class="fa fa-user fa-2x ml-1 text-white"></i>
                          <h2 class="mt-2 sub-judul text-white">USER</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="/koordinator-kecamatan">
                      <div class="card card-dark bg-secondary-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right text-white">{{$jumlahkecamatan}}</div>
                          <i class="fa fa-building fa-2x ml-1 text-white"></i>
                          <h2 class="mt-1 sub-judul text-white">KOORDINATOR KECAMATAN</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="/koordinator-desa">
                      <div class="card card-dark bg-danger-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right text-white">{{$jumlahdesa}}</div>
                          <i class="fa fa-university fa-2x ml-1 text-white"></i>
                          <h2 class="mt-1 sub-judul text-white">KOORDINATOR DESA</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="/data-relawan">
                      <div class="card card-dark bg-warning-gradient">
                        <div class="card-body pb-0 kartu">
                          <div class="h1 fw-bold float-right text-white">{{$jumlahrelawan}}</div>
                          <i class="fa fa-users fa-2x ml-1 text-white"></i>
                          <h2 class="mt-2 sub-judul text-white">RELAWAN</h2>
                          <div class="pull-in sparkline-fix chart-as-background">
                            <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                          </a>
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
<div class="kontaner">
<div class="card">
  <h1 class="text-center mt-5">GRAFIK</h1>
  <div class="card-body"> 
    <div class="card">
    <div class="card-body">
      <div id="grafik" class="mt--5 pb-1"></div>
    </div>
  </div>
</div>
<div class="card mt-5">
  <div class="card-body">
    <h1 class="text-center">DATA DETAIL</h1>
    <form action="/" method="GET">
      <input type="search"  name="search" class="form-control mt-3" placeholder="cari Koordinator desa" aria-describedby="passwordHelpInline">
    </form>
    <table class="table table-hover">
      <div class="row">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Koordinator Desa</th>
            <th scope="col">Deskripsi Desa</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Nama Koordinator Kecamatan</th>
            <th scope="col">Deskripsi Kecamatan</th>
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
            <td>{{$row->deskripsi}}</td>
            <td>{{$row->Datakelurahans->kelurahan}}</td>
            <td>{{$row->Koord_kecamatans->nama}}</td>
            <td>{{$row->Koord_kecamatans->deskripsi}}</td>
            <td>{{$row->data_relawan->count() }}</td>
            @endforeach
        </tr>
        </tbody>
    </table>
  </div>
</div>

</div>
  {{$desa->links()}}
</div>

  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
  var relawan = <?php echo json_encode($total) ?>;

  

  Highcharts.chart('grafik',{
    chart: {
        type: 'column'
    },
    title : {
      text: 'JUMLAH RELAWAN'
    },
    xAxis : {
      categories: ['November','Desember','Januari','Februari','Maret','April',
                      'Mei','Juni','Juli','Agustus','September','Oktober']
    },
    yAxis : {
      title: {
        text : 'Angka relawan'
      }
    },
    plotOption: {
      series: {
        allowPointSelect: true
      }
    },
    series: [
      {
        name: 'relawan',
        data: relawan,
      }
    ]
  });


</script>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Update Data Relawan</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/udpateDR/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" value="{{$data->nama}}" placeholder="Masukan Nama Anda" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">KK</label>
                        <input type="text" name="nokk" id="nokk" value="{{$data->nokk}}" placeholder="Masukan No KK" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}" id="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>
            
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" id="tgl_lahir" value="{{$data->tgl_lahir}}" placeholder="Masukan Tanggal Lahir" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">status</label>
                        <select name="status" class="form-control" aria-label="Default select example">
                          <option value="{{$data->status}}">-- {{$data->status}} --</option>
                          <option value="S">S</option>
                          <option value="B">B</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis</label>
                        <select name="jenis" class="form-control" aria-label="Default select example">
                          <option value="{{$data->jenis}}">-- {{$data->jenis}} --</option>
                          <option value="P">P</option>
                              <option value="L">L</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{$data->alamat}}" placeholder="Masukan Alamat" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RT</label>
                        <input type="text" name="rt" id="rt" value="{{$data->rt}}" placeholder="Masukan RT" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RW</label>
                        <input type="text" name="rw" id="rw" value="{{$data->rw}}" placeholder="Masukan RW" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TPS</label>
                        <input type="text" name="tps" id="tps" value="{{$data->tps}}" placeholder="Masukan TPS" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Koordinator Desa</label>
                        <select name="Koord_desa_id" class="form-control" aria-label="Default select example">
                          <option value="{{$data->Koord_desa_id}}">-- {{$data->Koord_desas->nama}} --</option>
                          @foreach ($desa as $data)
                              <option value="{{$data->id}}">{{$data->nama}} - {{$data->deskripsi}}</option>
                          @endforeach
                        </select>
                      </div>

                    {{-- <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                      <select name="kelurahan_id" class="form-control" aria-label="Default select example">
                        <option value="{{$data->kelurahan_id}}">-- {{$data->Datakelurahans->kelurahan}} {{$data->Datakelurahans->tps}} --</option>
                        @foreach ($datakelurahan as $datas)
                            <option value="{{$datas->id}}">{{$datas->kelurahan}} - {{$datas->tps}}</option>
                        @endforeach
                      </select>
                    </div> --}}

                    {{-- <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                      <select name="kelurahan_id" class="form-control" aria-label="Default select example">
                        <option value="{{$data->kelurahan_id}}">-- {{$data->Datakelurahans->kelurahan}} {{$data->Datakelurahans->tps}} --</option>
                        @foreach ($kelurahan as $datas)
                            <option value="{{$datas->id}}">{{$datas->kelurahan}} - {{$datas->tps}}</option>
                        @endforeach
                      </select>
                    </div> --}}

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Verifikasi</label>
                        <select name="is_visible" class="form-control" aria-label="Default select example">
                          <option value="{{$data->is_visible}}">-- {{$data->is_visible}} --</option>
                            <option value="belum">belum</option>
                            <option value="iya">iya</option>
                            <option value="tidak">tidak</option>
                        </select>
                      </div>
            
                      <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>

@endsection
@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Update Data Koordinator Desa</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/updateKD/{{ $dataKD->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" value="{{$dataKD->nama}}" placeholder="Masukan Nama Anda" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" value="{{$dataKD->deskripsi}}" placeholder="Masukan Deskripsi" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Koordinator Kecamatan</label>
                        <select name="Koord_kecamatan_id" class="form-control" aria-label="Default select example">
                          <option value="{{$dataKD->Koord_kecamatan_id}}">-- {{$dataKD->Koord_kecamatans->nama}} --</option>
                          @foreach ($dataKoord_kecamatan as $data)
                          <option value="{{$data->id}}">{{$data->nama}}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dapil</label>
                        <input type="text" name="dapil" value="{{$dataKD->dapil}}" placeholder="Masukan Nama Calon" class="form-control"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">
                    </div>
                    
                    
                    <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>

@endsection
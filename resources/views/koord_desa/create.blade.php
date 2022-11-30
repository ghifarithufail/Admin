@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Tambah Data Koordinator Desa</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/kDStore" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" placeholder="Masukan Nama Anda" class="form-control"  aria-describedby="emailHelp">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message = 'Nama harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Koordinator Kecamatan</label>
                        <select name="Koord_kecamatan_id" class="form-control" aria-label="Default select example">
                          <option selected>Pilih Koordinator Kecamatan</option>
                          @foreach ($dataKoord_kecamatan as $data)
                          <option value="{{$data->id}}">{{$data->nama}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                        <select name="kelurahan_id" class="form-control" aria-label="Default select example">
                          <option selected>Pilih Kelurahan</option>
                          @foreach ($dataKelurahan as $data)
                              <option value="{{$data->id}}">{{$data->kelurahan}}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" placeholder="Masukan Deskripsi" class="form-control"  aria-describedby="emailHelp">
                        @error('deskripsi')
                            <div class="alert alert-danger">{{ $message = 'Deskripsi harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dapil</label>
                        <input type="text" name="dapil" placeholder="Masukan Nama Calon" class="form-control"  aria-describedby="emailHelp">
                        @error('dapil')
                            <div class="alert alert-danger">{{ $message = 'Dapil harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>
            
                    <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>

@endsection
@extends('layout.default')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                        <select name="Koord_kecamatan_id" id="kecamatan" data-width="100%" class="js-example-basic-multiple js-states form-control" aria-label="Default select example">
                          <option selected>Pilih Koordinator Kecamatan</option>
                          @foreach ($dataKoord_kecamatan as $data)
                          <option value="{{$data->id}}">{{$data->nama}} - {{$data->deskripsi}}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Desa</label>
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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          
          
          <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
          <script>
            $(document).ready(function(){
                $("#kecamatan").select2({
                    // theme: "classic"
                });
            });
        </script>
</body>

@endsection
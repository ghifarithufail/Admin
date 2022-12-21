@extends('layout.default')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<body>
    
    <h1 class="text-center mb-4 mt-5">Tambah Data Raihan Suara</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/RHStore" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                        <select name="kelurahan_id" id="kelurahan" class="form-control" aria-label="Default select example">
                            <option selected>Pilih Kelurahan</option>
                            @foreach ($dataKelurahan as $data)
                            <option value="{{$data->id}}">{{$data->kelurahan}} - {{$data->tps}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Suara</label>
                        <input type="text" name="jumlah_suara" placeholder="Masukan Nama Anda" class="form-control"  aria-describedby="emailHelp">
                        @error('jumlah_suara')
                            <div class="alert alert-danger">{{ $message = 'Suara harus di isi'}}</div>
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
                $("#kelurahan").select2({
                    // theme: "classic"
                });
            });
        </script>
</body>

@endsection
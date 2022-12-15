@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Tambah Data Raihan Suara</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/RHStore" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                        <select name="kelurahan_id" class="form-control" aria-label="Default select example">
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
</body>

@endsection
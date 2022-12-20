@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Tambah Data Koordinator Kecamatan</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/kkStore" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" for="floatingInput" name="nama" placeholder="Masukan Nama Anda" class="form-control"  aria-describedby="emailHelp">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message = 'Nama harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                        <input type="text" name="deskripsi" placeholder="Masukan Kecamatan" class="form-control"  aria-describedby="emailHelp">
                        @error('deskripsi')
                            <div class="alert alert-danger">{{ $message = 'Deskripsi harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Desa</label>
                        <input type="text" name="desa" placeholder="Masukan Nama Desa" class="form-control"  aria-describedby="emailHelp">
                        @error('desa')
                            <div class="alert alert-danger">{{ $message = 'Desa harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div> --}}

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dapil</label>
                        <input type="text" name="dapil" placeholder="Masukan Dapil" class="form-control"  aria-describedby="emailHelp">
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
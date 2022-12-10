@extends('layout.default')
@section('content')
<body>
    
    <h1 class="text-center mb-4 mt-5">Tambah Data Relawan</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/rStore" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <div class="input-field">
                            <input type="text" name="nik" id="nik" placeholder="Masukan No NIK" class="form-control"  aria-describedby="emailHelp">
                        </div>
                        @error('nik')
                            <div class="alert alert-danger">{{ $message = 'NIK Sudah terdaftar'  }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <div class="input-field">
                            <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda" class="form-control"  aria-describedby="emailHelp">
                        </div>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message = 'Nama harus di isi atau Sudah terdaftar' }}</div>
                                @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">KK</label>
                        <input type="text" name="nokk" id="nokk" placeholder="Masukan No KK" class="form-control"  aria-describedby="emailHelp">
                        @error('nokk')
                            <div class="alert alert-danger">{{ $message = 'KK harus di isi' }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control"  aria-describedby="emailHelp">
                        @error('tempat_lahir')
                            <div class="alert alert-danger">{{ $message  = 'Tempat Lahir harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>
            
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" class="form-control"  aria-describedby="emailHelp">
                        @error('tgl_lahir')
                            <div class="alert alert-danger">{{ $message  = 'Tanggal Lahir harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <select name="status" class="form-control" aria-label="Default select example">
                          <option selected>Pilih Status</option>
                              <option value="Kawin">Kawin</option>
                              <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                      </div> --}}
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <input type="text" name="status" id="status" placeholder="Masukan Status " class="form-control"  aria-describedby="emailHelp">
                        @error('status')
                            <div class="alert alert-danger">{{ $message  = 'Status harus di isi' }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis</label>
                        <select name="jenis" class="form-control" aria-label="Default select example">
                          <option selected>Pilih Jenis</option>
                              <option value="Pria">Pria</option>
                              <option value="Perempuan">Perempuan</option>
                        </select>
                      </div> --}}

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis</label>
                        <input type="text" name="jenis" id="jenis" placeholder="Masukan Jenis" class="form-control"  aria-describedby="emailHelp">
                        @error('jenis')
                            <div class="alert alert-danger">{{ $message  = 'Jenis harus di isi' }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control"  aria-describedby="emailHelp">
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message  = 'Alamat harus di isi' }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RT</label>
                        <input type="text" name="rt" id="rt" placeholder="Masukan RT" class="form-control"  aria-describedby="emailHelp">
                        @error('rt')
                            <div class="alert alert-danger">{{ $message  = 'RT harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RW</label>
                        <input type="text" name="rw" id="rw" placeholder="Masukan RW" class="form-control"  aria-describedby="emailHelp">
                        @error('rw')
                            <div class="alert alert-danger">{{ $message  = 'RW harus di isi' }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TPS</label>
                        <input type="text" name="tps" id="tps" placeholder="Masukan TPS" class="form-control"  aria-describedby="emailHelp">
                        @error('tps')
                            <div class="alert alert-danger">{{ $message  = 'TPS harus di isi'}}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                        <select name="kelurahan_id" class="form-control" aria-label="Default select example">
                          <option selected>Pilih Kelurahan</option>
                          @foreach ($datakelurahan as $data)
                              <option value="{{$data->id}}">{{$data->kelurahan}} - {{$data->tps}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Koordinator Desa</label>
                        <select name="Koord_desa_id" class="form-control" aria-label="Default select example">
                          <option selected>Pilih Koordinator Desa</option>
                          @foreach ($datadesa as $data)
                              <option value="{{$data->id}}">{{$data->nama}}</option>
                          @endforeach
                        </select>
                      </div>

                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">is_visible</label>
                        <input type="text" name="is_visible" id="is_visible" placeholder="Masukan is_visible" class="form-control"  aria-describedby="emailHelp">
                        @error('is_visible')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">
                    </div> --}}
                    <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button>
                </form>
            </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            console.log('test');
            $.ajax({
                type:'get',
                url:'{!!URL::to('findRelawan')!!}',
                success:function(response){
                console.log(response);
                //material css
                // convert array to object
                var calonArray = response;
                var dataCalon = {};
                var dataCalon2 = {};
                for (var i = 0; i < calonArray.length; i++){
                    dataCalon[calonArray[i].nik] =calonArray[i];
                    dataCalon2[calonArray[i].nik] =calonArray[i];
                }
                console.log("dataCalon2");
                console.log(dataCalon2);

                //convert end
                $('input#nik').autocomplete({
                data: dataCalon,
                minLength:12,
                onAutocomplete:function(reqdata){
                    console.log(reqdata);
                    $('#nama').val(dataCalon2[reqdata]['nama']);
                    $('#nokk').val(dataCalon2[reqdata]['nokk']);
                    $('#tempat_lahir').val(dataCalon2[reqdata]['tempat_lahir']);
                    $('#tgl_lahir').val(dataCalon2[reqdata]['tgl_lahir']);
                    $('#status').val(dataCalon2[reqdata]['status']);
                    $('#jenis').val(dataCalon2[reqdata]['jenis']);
                    $('#alamat').val(dataCalon2[reqdata]['alamat']);
                    $('#rt').val(dataCalon2[reqdata]['rt']);
                    $('#rw').val(dataCalon2[reqdata]['rw']);
                    $('#tps').val(dataCalon2[reqdata]['tps']);
                    // $('#kelurahan_id').val(dataPem2[reqdata]['kelurahan']);
                    // $('#koordinator_id').val(dataPem2[reqdata]['kecamatan']);
                    // $('#is_visible').val(dataPem2[reqdata]['dapil']);

                }
            });
            //end
            }
            })
        });
    </script>
</body>

@endsection
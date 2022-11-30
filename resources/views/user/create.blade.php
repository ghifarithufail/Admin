@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Tambah Data User</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/registeruser" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Nama</label>
                        <input type="text" id="form2Example1" name="name" class="form-control" />
                        @error('name')
                            <div class="alert alert-danger">{{ $message = 'Nama harus di isi' }}</div>
                        @enderror
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">No Telpon</label>
                        <input type="text" id="form2Example1" name="no_telpon" class="form-control" />
                        @error('no_telpon')
                            <div class="alert alert-danger">{{ $message = 'No Telpon harus di isi'}}</div>
                        @enderror
                      </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">Email address</label>
                      <input type="email" id="form2Example1" name="email" class="form-control" />
                      @error('email')
                            <div class="alert alert-danger">{{ $message= 'Email harus di isi' }}</div>
                        @enderror
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example2">Password</label>
                      <input type="password" id="form2Example2" name="password" class="form-control" />
                      @error('password')
                            <div class="alert alert-danger">{{ $message = 'password harus di isi'}}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Role</label>
                      <select name="role" class="form-control" aria-label="Default select example">
                        <option selected>Pilih Team</option>
                            <option value="admin">Admin</option>
                            <option value="koordinator_kecamatan">Koordinator Kecamatan</option>
                            <option value="koordinator_desa">Koordinator Desa</option>
                            <option value="relawan">Relawan</option>
                      </select>
                      @error('role')
                            <div class="alert alert-danger">{{ $message = 'Role harus di isi'}}</div>
                        @enderror
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        </div>
                      </div>

                <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>

@endsection
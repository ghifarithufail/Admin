@extends('layout.default')
@section('content')

<body>
    
    <h1 class="text-center mb-4 mt-5">Update Data user</h1>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="/udpateU/{{ $datauser->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Nama</label>
                        <input type="text" id="form2Example1" value="{{$datauser->name}}" name="name" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">No Telpon</label>
                      <input type="text" id="form2Example1" value="{{$datauser->no_telpon}}" name="no_telpon" class="form-control" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">Email address</label>
                      <input type="email" id="form2Example1" value="{{$datauser->email}}" name="email" class="form-control" />
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example2">Password</label>
                      <input type="password" id="form2Example2" value="{{$datauser->password}}" name="password" class="form-control" />
                    </div>
            
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Role</label>
                      <select name="role" class="form-control" aria-label="Default select example">
                        <option value="{{$datauser->role}}">-- {{$datauser->role}} --</option>
                          <option value="admin">Admin</option>
                          <option value="koordinator_kecamatan">Koordinator Kecamatan</option>
                          <option value="koordinator_desa">Koordinator Desa</option>
                          <option value="relawan">Relawan</option>
                      </select>
                    </div>

                    <button type="submit" class="btn  form-control text-white" style="background-color: red">Submit</button>
                </form>
              </div>
            </div>
          </div>
</body>

@endsection
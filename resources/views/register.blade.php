<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="judul text-center mb-4 mt-3">
        <h1>REGISTER</h1>
    </div>
    <div class="container">
    <form action="/registeruser" method="post">
        @csrf
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Name</label>
            <input type="text" id="form2Example1" name="name" class="form-control" />
          </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Email address</label>
          <input type="email" id="form2Example1" name="email" class="form-control" />
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example2">Password</label>
          <input type="password" id="form2Example2" name="password" class="form-control" />
        </div>


        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Role</label>
          <select name="role" class="form-control" aria-label="Default select example">
            <option selected>Pilih Team</option>
                <option value="admin">Admin</option>
                <option value="koordinator_kecamatan">koordinator kecamatan</option>
                <option value="koordinator_desa">koordinator Desa</option>
                <option value="relawan">Relawan</option>

          </select>
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>
      
          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
      
        <!-- Register buttons -->
        <div class="text-center">
          <p>member? <a href="/login">Login</a></p>
          <p>or sign up with:</p>
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
      
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
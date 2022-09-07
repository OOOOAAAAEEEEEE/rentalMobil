<?php

require 'inc/daftar.inc.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-2 rows-cols-lg-2">
      <div class="col-lg-7">
        <div class="card bg-body shadow-lg rounded">
          <div class="card-body">
            <h5> Hello </h5>
          </div>
        </div>
      </div>
      <div class="col-lg-5 my-3 my-md-0">
        <div class="card bg-body shadow-lg rounded">
          <div class="card-body">
            <form style="max-width:300px; margin:auto;" action="inc/daftar.inc.php" method="POST">
                <h1 class="h3 my-4 font-weight-normal">Sign up Page</h1>
                  <input type="text" name="fullname" class="form-control my-2" placeholder="Input Nama lengkap" autofocus required>
                  <input type="email" name="email" class="form-control my-2" placeholder="Input Email" required>
                  <input type="text" name="username" class="form-control my-2" placeholder="Input Username" required>
                  <input type="password" name="pwd" class="form-control my-2" placeholder="Input Password" required>
                  <input type="tel" name="no_telp" class="form-control my-2" placeholder="Input No Telephone" required>
                <div class="form-floating">
                  <textarea class="form-control my-2" name="alamat" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px" required></textarea>
                  <label for="floatingTextarea2">Masukkan Alamat</label>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" name="kirim" class="btn btn-primary mt-3">Daftar</button>
                  <a class="btn btn-primary" href="masuk.php"> Sudah Punya Akun? </a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
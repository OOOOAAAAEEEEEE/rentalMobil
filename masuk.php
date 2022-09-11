<?php 

require 'inc/masuk.inc.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>
      <form style="max-width:300px; margin:auto;" action="inc/masuk.inc.php" method="POST">

        <h1 class="h3 mt-4 mb-4 font-weight-normal">Login Page</h1>
          <div class="row row-cols-1">
            <div class="col">
              <input type="text" name="username" class="inputUsername form-control"  placeholder="Input Username" autofocus required>
            </div>
            <div class="col">
              <input type="password" name="pwd"  class="inputPassword form-control" placeholder="Input Password" required>
            </div>
            <div class="col">
              <div class="d-grid gap-2 mt-3">
                <button type="submit" name="kirim1" class="btn btn-primary btn-block">Masuk</button>
                <a class="btn btn-primary" href="daftar.php"> Belum punya akun?</a>
              </div>
            </div>
          </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
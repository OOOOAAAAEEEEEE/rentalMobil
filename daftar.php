<?php

require 'inc/daftar.inc.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/mystyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center mt-5">
    <form style="max-width:300px; margin:auto;" action="inc/daftar.inc.php" method="POST">
      <table>
        <thead>
          <!--  -->
        </thead>
        <tbody>
          <tr>
            <td>
              <h1 class="h3 mt-4 mb-4 font-weight-normal">Sign up Page</h1>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" name="fullname" class="inputUsername form-control" placeholder="Input Nama lengkap" autofocus required>
            </td>
          </tr>
          <tr>
            <td>
              <input type="email" name="email" class="inputUsername form-control" placeholder="Input Email" required>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" name="username" class="inputUsername form-control" placeholder="Input Username" required>
            </td>
          </tr>
          <tr>
            <td>
              <input type="password" name="pwd" class="inputPassword form-control" placeholder="Input Password" required>
            </td>
          </tr>
          <tr>
            <td>
              <input type="tel" name="no_telp" class="inputPassword form-control" placeholder="Input No Telephone" required>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-floating">
                <textarea class="form-control" name="alamat" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px" required></textarea>
                <label for="floatingTextarea2">Masukkan Alamat</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <table>
        <tbody>
          <tr>
            <td>
              <div class="ms-2 mt-3 me-5">
                <button type="submit" name="kirim" class="btn btn-primary">Daftar</button>
              </div>
            </td>
            <td>
              <div class="mt-3">
                <a class="btn btn-primary" href="masuk.php"> Login </a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
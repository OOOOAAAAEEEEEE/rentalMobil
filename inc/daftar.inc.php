<?php 

if (isset($_POST["kirim"])) {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    require_once 'login_function.inc.php';

        if (userExist($conn, $username) !== false) {
            header("location: ../daftar.php?error=usernamealreadytaken");
            exit();
        }else{
            createUser($conn, $fullname, $email, $username, $pwd, $no_telp, $alamat);
        }
    }
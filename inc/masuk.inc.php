<?php 

require 'login_function.inc.php';

if (isset($_POST['kirim1'])) {
    
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    loginUser($conn, $username, $pwd);
}
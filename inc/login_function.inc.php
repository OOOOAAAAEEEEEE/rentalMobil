<?php
include 'conn.inc.php';

function userExist($conn, $username){
    $query = "SELECT * FROM tb_user WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$query)){
            header("Location: ../daftar.php");
            exit();
        }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result_data)){
            return $row;
        }else{
            $result_data = false;
            return $result_data;
        }
    
    mysqli_stmt_close($stmt);
}

function createUser($conn, $fullname, $email, $username, $pwd, $no_telp, $address){
    $query = "INSERT INTO tb_user (fullname, email, username, pwd, no_telp, alamat) VALUES (? , ? , ? , ? , ? , ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $query)){
        header("Location: ../daftar.php");
        exit();
    }

    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $email, $username, $hashPwd, $no_telp, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../masuk.php?berhasil");
    exit();
}

function loginUser($conn, $username, $pwd){
    $userExist = userExist($conn, $username);

        if($userExist === false){
            header("Location: ../index.php?error=AccNotFound");
            exit();
        }

    $pwdHashed = $userExist['pwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

        if($checkPwd === false){
            header("Location: ../index.php?error=WrongPassword");
            exit();
        
        }else if($checkPwd === true){

            session_start();
            $_SESSION['ids'] = $userExist['id'];
            $_SESSION['fullnames'] = $userExist['fullname'];
            $_SESSION['usernames'] = $userExist['username'];
            $_SESSION['roles'] = $userExist['role'];

            $adminRole = $_SESSION['roles'] == 1;

                if($adminRole == true){
                    header("Location: ../dashboard.php");
                    exit();
                }else{
                    header("Location: ../dashboard.php");
                    exit();
                }
        }
}
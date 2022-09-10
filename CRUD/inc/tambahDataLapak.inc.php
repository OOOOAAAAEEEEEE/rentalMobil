<?php
require '../../inc/conn.inc.php';

session_start();

$id_tb_user = $_SESSION['ids'];

$query_select_tb_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id='$id_tb_user'");
$fetch_query_tb_user = mysqli_fetch_all($query_select_tb_user, MYSQLI_ASSOC);
foreach($fetch_query_tb_user as $data_tb_user);
$no_telp_tb_user  = $data_tb_user['no_telp'];
$fullname_tb_user = $data_tb_user['fullname'];
$alamat_tb_user = $data_tb_user['alamat'];


if(isset($_POST['submit'])){

    $merk = mysqli_real_escape_string($conn, $_POST['merk']);
    $sub_merk = mysqli_real_escape_string($conn, $_POST['sub_merk']);
    $tipe_mobil = mysqli_real_escape_string($conn, $_POST['tipe_mobil']);
    $no_polisi = mysqli_real_escape_string($conn, $_POST['no_polisi']);
    $warna = mysqli_real_escape_string($conn, $_POST['warna']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
    $query_insert = "INSERT INTO tb_lapak 
    (id_tb_user, no_telp_tb_user, fullname_tb_user, alamat_tb_user, merk, 
    sub_merk, tipe_mobil, no_polisi, warna, harga, deskripsi) 
    VALUES 
    ('$id_tb_user', '$no_telp_tb_user', '$fullname_tb_user', '$alamat_tb_user', 
    ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $query_insert)){
            echo "stmt SQL gagal";

        }else{
            mysqli_stmt_bind_param($stmt, "sssssss", $merk, $sub_merk, $tipe_mobil, $no_polisi, $warna, $harga, $deskripsi);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
            header("Location: ../tambahDataSuksesPrompt.php");
        }
}
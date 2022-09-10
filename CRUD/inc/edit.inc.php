<?php

    if(isset($_POST['edit'])){

        require '../../inc/conn.inc.php';
        $id_GET = $_GET['id'];
        $merk = mysqli_real_escape_string($conn, $_POST['merk']);
        $sub_merk = mysqli_real_escape_string($conn, $_POST['sub_merk']);
        $tipe_mobil = mysqli_real_escape_string($conn, $_POST['tipe_mobil']);
        $no_polisi = mysqli_real_escape_string($conn, $_POST['no_polisi']);
        $warna = mysqli_real_escape_string($conn, $_POST['warna']);
        $harga = mysqli_real_escape_string($conn, $_POST['harga']);
        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

        $update_query = "UPDATE tb_lapak SET merk=?, sub_merk=?, tipe_mobil=?, no_polisi=?, warna=?, harga=?, deskripsi=? WHERE id='$id_GET';";

        $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $update_query)){
                echo "stmt SQL failed";
            
            }else{

                mysqli_stmt_bind_param($stmt, "sssssss", $merk, $sub_merk, $tipe_mobil, $no_polisi, $warna, $harga, $deskripsi);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }

        header("Location:../editSukses.php");
    }
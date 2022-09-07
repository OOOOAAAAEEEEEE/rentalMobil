<?php

    if(isset($_POST['edit'])){

        require '../../inc/conn.inc.php';
        $id_GET = $_GET['id'];
        $merk = $_POST['merk'];
        $sub_merk = $_POST['sub_merk'];
        $tipe_mobil = $_POST['tipe_mobil'];
        $no_polisi = $_POST['no_polisi'];
        $warna = $_POST['warna'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];

        mysqli_query($conn, "UPDATE tb_lapak SET 
        merk='$merk',
        sub_merk='$sub_merk',
        tipe_mobil='$tipe_mobil',
        no_polisi='$no_polisi',
        warna='$warna',
        harga='$harga',
        deskripsi='$deskripsi' WHERE id='$id_GET';");

        header("Location:../editSukses.php");
    }
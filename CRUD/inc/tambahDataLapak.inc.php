<?php

require '../../inc/conn.inc.php';

if(isset($_POST['submit'])){

    $merk = $_POST['merk'];
        if(!preg_match("/^[a-zA-Z\d]*$/", $merk)){
            header("Location: gagal.inc.php");
            exit();
        }else{
            $sub_merk = $_POST['sub_merk'];
                if(!preg_match("/^[-a-zA-Z\d\s]*$/", $sub_merk)){
                    header("Location: gagal.inc.php");
                    exit();
                }else{
                    $tipe_mobil = $_POST['tipe_mobil'];
                        if(!preg_match("/^[a-zA-Z]*$/", $tipe_mobil)){
                            header("Location: gagal.inc.php");
                            exit();
                        }else{
                            $no_polisi = $_POST['no_polisi'];
                                if(!preg_match("/^[a-zA-Z\d\s]*$/", $no_polisi)){
                                    header("Location: gagal.inc.php");
                                    exit();
                                }else{
                                    $warna = $_POST['warna'];
                                        if(!preg_match("/^[a-zA-Z\s]*$/", $warna)){
                                            header("Location: gagal.inc.php");
                                            exit();
                                        }else{
                                            $insertData = mysqli_query($conn, 
                                            "INSERT INTO tb_lapak (merk, sub_merk, tipe_mobil, no_polisi, warna) 
                                            VALUES ('$merk','$sub_merk','$tipe_mobil','$no_polisi','$warna');
                                            ");

                                            header("Location: sukses.inc.php");
                                            exit();
                                        }
                                }
                        }
                }
        }
}



<?php

session_start();

$id_tb_user = $_SESSION['ids'];
$no_telp  = $_SESSION['no_telps'];
$fullnameS = $_SESSION['fullnames'];

require '../../inc/conn.inc.php';

if(isset($_POST['submit'])){

    $merk = $_POST['merk'];
        if(!preg_match("/^[a-zA-Z\d]*$/", $merk)){
            header("Location:../tambahDataGagalPrompt.php");
            exit();
        }else{
            $sub_merk = $_POST['sub_merk'];
                if(!preg_match("/^[-a-zA-Z\d\s]*$/", $sub_merk)){
                    header("Location:../tambahDataGagalPrompt.php");
                    exit();
                }else{
                    $tipe_mobil = $_POST['tipe_mobil'];
                        if(!preg_match("/^[a-zA-Z]*$/", $tipe_mobil)){
                            header("Location:../tambahDataGagalPrompt.php");
                            exit();
                        }else{
                            $no_polisi = $_POST['no_polisi'];
                                if(!preg_match("/^[a-zA-Z\d\s]*$/", $no_polisi)){
                                    header("Location:../tambahDataGagalPrompt.php");
                                    exit();
                                }else{
                                    $warna = $_POST['warna'];
                                        if(!preg_match("/^[a-zA-Z\s]*$/", $warna)){
                                            header("Location:../tambahDataGagalPrompt.php");
                                            exit();
                                        }else{
                                            $harga = $_POST['harga'];
                                                if(!preg_match("/^[\d]*$/", $harga)){
                                                    header("Location:../tambahDataGagalPrompt.php");
                                                    exit();
                                                }else{
                                                    $deskripsi = $_POST['deskripsi'];
                                                    mysqli_query($conn, 
                                                    "INSERT INTO tb_lapak (id_tb_user, no_telp_tb_user, fullname_tb_user, merk, sub_merk, tipe_mobil, no_polisi, warna, harga, deskripsi) 
                                                    VALUES ('$id_tb_user' ,'$no_telp','$fullname_tb_user','$merk','$sub_merk','$tipe_mobil','$no_polisi','$warna','$harga','$deskripsi');
                                                    ");
                                                    header("Location: ../tambahDataSuksesPrompt.php");
                                                    exit();
                                                }
                                        }
                                }
                        }
                }
        }
}
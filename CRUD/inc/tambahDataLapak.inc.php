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

        // IMG 1
        $error0 = $_FILES['my_image']['error'];
        if($error0 === 0){

            $img_size0 = $_FILES['my_image']['size'];
            if($img_size0 >= 10485760){
                header("Location: ../tambahGagalPrompt.php");
                exit();
            }else{
                $img_name0 = $_FILES['my_image']['name'];
                $img_ex0 = pathinfo($img_name0, PATHINFO_EXTENSION);
                $img_ex_lc0 = strtolower($img_ex0);
                $allowed_exs0 = array('jpg', 'jpeg', 'png');

                    if(in_array($img_ex_lc0, $allowed_exs0)){
                        $new_img_name0 = uniqid("Mobil-", true).".".$img_ex_lc0;
                        $img_upload_path0 = '../../img/uploadsInsert/'.$new_img_name0;
                        $tmp_name0 = $_FILES['my_image']['tmp_name'];
                        move_uploaded_file($tmp_name0, $img_upload_path0);
                        
                        // IMG 2
                        $error1 = $_FILES['my_image_1']['error'];
                            if($error1 === 0){

                                $img_size1 = $_FILES['my_image_1']['size'];
                                if($img_size1 >= 10485760){
                                    header("Location: ../tambahGagalPrompt.php");
                                    exit();

                                }else{
                                    $img_name1 = $_FILES['my_image_1']['name'];
                                    $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
                                    $img_ex_lc1 = strtolower($img_ex1);
                                    $allowed_exs1 = array('jpg', 'jpeg', 'png');

                                        if(in_array($img_ex_lc1, $allowed_exs1)){
                                            $new_img_name1 = uniqid("Mobil-", true).".".$img_ex_lc1;
                                            $img_upload_path1 = '../../img/uploadsInsert/'.$new_img_name1;
                                            $tmp_name1 = $_FILES['my_image_1']['tmp_name'];
                                            move_uploaded_file($tmp_name1, $img_upload_path1);

                                            //IMG 3
                                            $error2 = $_FILES['my_image_2']['error'];
                                                if($error2 === 0){

                                                    $img_size2 = $_FILES['my_image_2']['size'];
                                                    if($img_size2 >= 10485760){
                                                        header("Location: ../tambahGagalPrompt.php");
                                                        exit();

                                                    }else{
                                                        $img_name2 = $_FILES['my_image_2']['name'];
                                                        $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
                                                        $img_ex_lc2 = strtolower($img_ex2);
                                                        $allowed_exs2 = array('jpg', 'jpeg', 'png');

                                                            if(in_array($img_ex_lc2, $allowed_exs2)){
                                                                $new_img_name2 = uniqid("Mobil-", true).".".$img_ex_lc2;
                                                                $img_upload_path2 = '../../img/uploadsInsert/'.$new_img_name2;
                                                                $tmp_name2 = $_FILES['my_image_2']['tmp_name'];
                                                                move_uploaded_file($tmp_name2, $img_upload_path2);

                                                                    //IMG 4
                                                                    $error3 = $_FILES['my_image_3']['error'];
                                                                    if($error3 === 0){

                                                                        $img_size3 = $_FILES['my_image_3']['size'];
                                                                        if($img_size3 >= 10485760){
                                                                            header("Location: ../tambahGagalPrompt.php");
                                                                            exit();

                                                                        }else{
                                                                            $img_name3 = $_FILES['my_image_3']['name'];
                                                                            $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
                                                                            $img_ex_lc3 = strtolower($img_ex3);
                                                                            $allowed_exs3 = array('jpg', 'jpeg', 'png');

                                                                                if(in_array($img_ex_lc3, $allowed_exs3)){
                                                                                    $new_img_name3 = uniqid("Mobil-", true).".".$img_ex_lc3;
                                                                                    $img_upload_path3 = '../../img/uploadsInsert/'.$new_img_name3;
                                                                                    $tmp_name3 = $_FILES['my_image_3']['tmp_name'];
                                                                                    move_uploaded_file($tmp_name3, $img_upload_path3);

                                                                                    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");

                                                                                    $query_insert = "INSERT INTO tb_lapak 
                                                                                    (id_tb_user, no_telp_tb_user, fullname_tb_user, alamat_tb_user, merk, 
                                                                                    sub_merk, tipe_mobil, no_polisi, warna, harga, deskripsi, img_url, img_url_1, img_url_2, img_url_3) 
                                                                                    VALUES 
                                                                                    ('$id_tb_user', '$no_telp_tb_user', '$fullname_tb_user', '$alamat_tb_user'
                                                                                    , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

                                                                                    $stmt = mysqli_stmt_init($conn);

                                                                                        if(!mysqli_stmt_prepare($stmt, $query_insert)){
                                                                                            echo "stmt SQL gagal";

                                                                                        }else{
                                                                                            mysqli_stmt_bind_param($stmt, "sssssssssss", $merk, $sub_merk, $tipe_mobil, $no_polisi, $warna, $harga, $deskripsi, $new_img_name0, $new_img_name1, $new_img_name2, $new_img_name3);
                                                                                            mysqli_stmt_execute($stmt);
                                                                                            mysqli_stmt_close($stmt);
                                                                                            mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1;");
                                                                                            header("Location: ../tambahDataSuksesPrompt.php");
                                                                                        }
                                                                                }
                                                                        }
                                                                    }
                                                            }
                                                    }
                                                }
                                        }
                                }
                            }
                    }
            }
        }
    }
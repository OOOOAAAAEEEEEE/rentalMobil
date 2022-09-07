<?php
include 'conn.inc.php';

    if( isset($_POST['kirim']) && isset($_FILES['my_image'])) {
        // require 'conn.inc.php';
        session_start();
        $fullname = $_POST['fullname'];
        $usernameS = $_POST['username'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $id_SESSION = $_SESSION['ids'];

        $img_size = $_FILES['my_image']['size'];
        $error = $_FILES['my_image']['error'];

            if($error === 0){

                if($img_size > 4194304){
                    header("Location: ../tambahGagalPrompt.php");
                    exit();

                }else{
                    $img_name = $_FILES['my_image']['name'];
                    $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $allowed_exs = array('jpg', 'jpeg', 'png');

                        if(in_array($img_ex_lc, $allowed_exs)){
                            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                            $img_upload_path = '../img/uploadsProfile/'.$new_img_name;
                            $tmp_name = $_FILES['my_image']['tmp_name'];
                            move_uploaded_file($tmp_name, $img_upload_path);

                            mysqli_query($conn, "UPDATE tb_user SET 
                            fullname='$fullname',
                            username='$usernameS',
                            email='$email',
                            no_telp='$no_telp',
                            alamat='$alamat',
                            img_url='$new_img_name'
                            WHERE id='$id_SESSION';");
                            header("Location:../suksesPrompt.php");
                            exit();

                        }else{
                            header("Location:../tambahGagalPrompt.php");
                            exit();
                        }
                }

            }else{
                header("Location: ../tambahGagalPrompt.php");
                exit();
            }
    }

if(isset($_POST['kirim1'])){

    session_start();
        $fullname = $_POST['fullname'];
        $usernameS = $_POST['username'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $id_SESSION = $_SESSION['ids'];

        mysqli_query($conn, "UPDATE tb_user SET 
                                fullname='$fullname',
                                username='$usernameS',
                                email='$email',
                                no_telp='$no_telp',
                                alamat='$alamat'
                                WHERE id='$id_SESSION';");

        header("Location:../suksesPrompt.php");
}
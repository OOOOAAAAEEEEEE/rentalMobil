<?php

require 'conn.inc.php';

$select_query = mysqli_query($conn, "SELECT * FROM tb_lapak;");
$fetch_tb_lapak_assoc = mysqli_fetch_all($select_query, MYSQLI_ASSOC);

if(isset($_POST['checkIntegrity'])){

        function checkIntegrity(){
        session_start();
        require 'conn.inc.php';

        $idSesi = $_SESSION['ids'];

        $select_query = mysqli_query($conn, "SELECT * FROM tb_lapak WHERE id_tb_user='$idSesi';");
        $navbar_assocs = mysqli_fetch_all($select_query, MYSQLI_ASSOC);
        foreach($navbar_assocs as $navbar_assoc);

            $idTetap = $navbar_assoc['id_tb_user'];
            $fullnameTetap = $_SESSION['fullnames'];
            $no_telpTetap = $_SESSION['no_telps'];
            $alamatTetap = $_SESSION['alamats'];
            
            mysqli_query($conn, "UPDATE tb_lapak SET 
            fullname_tb_user='$fullnameTetap',
            no_telp_tb_user='$no_telpTetap',
            alamat_tb_user='$alamatTetap' WHERE id_tb_user='$idTetap';");
            
            header("Location:../suksesPrompt.php");
    }
    return checkIntegrity();
}

if(isset($_POST['search'])){
    require 'conn.inc.php';

        $cari = $_POST['cari'];
        $search_query_tb_lapak = mysqli_query($conn, "SELECT * FROM tb_lapak 
        WHERE alamat_tb_user LIKE '%$cari%'
        OR merk LIKE '%$cari%'
        OR sub_merk LIKE '%$cari%'
        OR tipe_mobil LIKE '%$cari%'
        OR warna LIKE '%$cari%'");

        $search_fetch_tb_lapak = mysqli_fetch_all($search_query_tb_lapak, MYSQLI_ASSOC);
}
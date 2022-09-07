<?php include_once '../HPheader.php'; ?>

<?php

    if (isset($_SESSION['fullnames'])) :

?>

<?php
require '../inc/conn.inc.php';

$id_GET = $_GET['id'];
$select_query = mysqli_query($conn, "SELECT * FROM tb_lapak WHERE id='$id_GET';");
$fetch_assoc = mysqli_fetch_all($select_query, MYSQLI_ASSOC);
foreach($fetch_assoc as $tb_lapak);
?>
    
<?php include_once 'navbar.php'; ?>

    <div class="container">
        <div class="card bg-body shadow-lg rounded">
            <div class="card-header">
                <h5>Tambah Lapak</h5>
            </div>
                <div class="card-body">
                    <form action="inc/edit.inc.php?id=<?=$id_GET;?>" method="POST">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                            <div class="col">
                                <div class="">
                                    <label for="" class="form-label"> Merk </label>
                                    <input type="text" name="merk" class="form-control" value="<?=$tb_lapak['merk'];?>" autofocus>
                                </div>
                            </div>
                            <div class="col">
                                <div class="">
                                    <label for="" class="form-label"> Sub-Merk & Tipe </label>
                                    <input type="text" name="sub_merk" class="form-control" value="<?=$tb_lapak['sub_merk'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-sm-4 mt-md-0 mt-xxl-0">
                                    <label class="form-label"> Jenis Mobil </label>
                                    <?php 
                                        $value = $tb_lapak['tipe_mobil'];
                                    ?>
                                    <select class="form-select" name="tipe_mobil">
                                        <option value="<?php htmlspecialchars($value);?>"><?=$value;?> || Current Position</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="Hatchback">Hatchback</option>
                                        <option value="MPV">MPV</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Jeep">Jeep</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <label class="form-label"> No Polisi </label>
                                    <input type="text" name="no_polisi" class="form-control" value="<?=$tb_lapak['no_polisi'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <label class="form-label"> Warna </label>
                                    <input type="text" name="warna" class="form-control" value="<?=$tb_lapak['warna'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <label for="" class="form-label"> Harga </label>
                                    <input type="text" name="harga" class="form-control" value="<?=$tb_lapak['harga'];?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="deskripsi" id="floatingTextarea1" style="width: 250px ; height: 150px">
                                            <?=$tb_lapak['deskripsi'];?>
                                        </textarea>
                                        <label for="floatingTextarea1">Masukkan Deskripsi Barang</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col mt-3">
                                    <div class="d-grid gap-1">
                                        <a class="btn btn-primary" href="detail.php?id=<?=$id_GET;?>"> Kembali</a>    
                                    </div>
                                </div>
                                <div class="col mt-3">
                                    <div class="d-grid gap-1">
                                        <button class="btn btn-warning" name="edit" type="submit"> Edit Post </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once '../HPfooter.php'; ?>

<?php

else :
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();


?>
<?php endif; ?>
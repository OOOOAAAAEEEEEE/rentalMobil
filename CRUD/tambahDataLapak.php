<?php include_once '../HPheader.php'; ?>

<?php

    if (isset($_SESSION['fullnames'])) :

?>

    
<?php include_once 'navbar.php'; ?>

    <div class="container-xxl">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Lapak</h5>
            </div>
                <div class="card-body">
                    <form action="inc/tambahDataLapak.inc.php" method="POST">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                            <div class="col">
                                <div class="">
                                    <label for="" class="form-label"> Merk </label>
                                    <input type="text" name="merk" class="form-control" placeholder="Seperti 'Toyota'" required autofocus>
                                </div>
                            </div>
                            <div class="col">
                                <div class="">
                                    <label for="" class="form-label"> Sub-Merk & Tipe </label>
                                    <input type="text" name="sub_merk" class="form-control" placeholder="Seperti Toyota 'Yaris'" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-sm-4 mt-md-0 mt-xxl-0">
                                    <label for="" class="form-label"> Jenis Mobil </label>
                                    <select class="form-select" name="tipe_mobil" required>
                                        <option value="">--Pilih Tipe Mobil--</option>
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
                                    <label for="" class="form-label"> No Polisi </label>
                                    <input type="text" name="no_polisi" class="form-control" placeholder="Seperti 'B XXXX XXX'" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <label for="" class="form-label"> Warna </label>
                                    <input type="text" name="warna" class="form-control" placeholder="Seperti 'Hitam'" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <label for="" class="form-label"> Harga </label>
                                    <input type="text" name="harga" class="form-control" placeholder="Seperti '1000000'" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea1" style="width: 250px ; height: 150px" required></textarea>
                                        <label for="floatingTextarea1">Masukkan Deskripsi Barang</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="mt-4">
                                <div class="col">
                                    <button class="btn btn-success" name="submit" type="submit"> Submit </button>
                                </div>
                            <div class="mt-4">
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
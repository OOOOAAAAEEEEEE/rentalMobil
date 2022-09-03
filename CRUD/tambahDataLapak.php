<?php include_once '../HPheader.php'; ?>

<?php

    if (isset($_SESSION['fullnames'])) :

?>

    
<?php include_once 'navbar.php'; ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Lapak</h5>
            </div>
                <div class="card-body">
                    <form action="inc/tambahDataLapak.inc.php" method="POST">
                        <table>
                            <thead>
                                <!--  -->
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="ms-5 mt-3">
                                        <label for="" class="form-label"> Merk </label>
                                        <input type="text" name="merk" class="form-control" placeholder="Seperti 'Toyota'" required autofocus>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ms-5 mt-3">
                                        <label for="" class="form-label"> Sub-Merk & Tipe </label>
                                        <input type="text" name="sub_merk" class="form-control" placeholder="Seperti Toyota 'Yaris'" required>
                                        </div>
                                    </td>  
                                    <td>
                                        <div class="ms-5 mt-3">
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
                                    </td>  
                                    <td>
                                        <div class="ms-5 mt-3">
                                        <label for="" class="form-label"> No Polisi </label>
                                        <input type="text" name="no_polisi" class="form-control" placeholder="Seperti 'B XXXX XXX'" required>
                                        </div>
                                    </td>  
                                </tr>
                                <tr>
                                <td>
                                    <div class="ms-5 mt-3">
                                        <label for="" class="form-label"> Warna </label>
                                        <input type="text" name="warna" class="form-control" placeholder="Seperti 'Hitam'" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="ms-5 mt-3">
                                        <label for="" class="form-label"> Harga </label>
                                        <input type="text" name="harga" class="form-control" placeholder="Seperti '1000000'" required>
                                    </div>
                                </td>  
                                </tr>
                                <tr>
                                    <td>
                                        <div class="ms-5 mt-3">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea1" style="width: 250px ; height: 150px" required></textarea>
                                                <label for="floatingTextarea1">Masukkan Deskripsi Barang</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class=" ms-5 mt-5 btn btn-success" name="submit" type="submit">
                                            Submit
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
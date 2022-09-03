<?php include_once '../HPHeader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

<?php include_once 'navbar.php'; ?>

<?php require '../inc/dashboard.inc.php' ?>

        <?php 
            $id = $_GET['id'];
            $detail_query = mysqli_query($conn, "SELECT * FROM tb_lapak WHERE id='$id';");
            $detail_fetch_assoc = mysqli_fetch_all($detail_query, MYSQLI_ASSOC);
        ?>

    <?php foreach($detail_fetch_assoc as $detail_tb_lapak): ?>
        <div class="container">
            <div class="float-none">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="ms-3 card-title"> <?= htmlspecialchars($detail_tb_lapak['merk']); ?> </h3>
                        <h5 class="ms-3 card-title"> <?= htmlspecialchars($detail_tb_lapak['sub_merk']); ?> </h5>

                        <p class="ms-3 card-text"> Deskripsi Barang </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="ms-3 list-group-item">Tipe Mobil : <?= htmlspecialchars($detail_tb_lapak['tipe_mobil']); ?></li>
                        <li class="ms-3 list-group-item">No Polisi : <?= htmlspecialchars($detail_tb_lapak['no_polisi']); ?></li>
                        <li class="ms-3 list-group-item">Warna Mobil : <?= htmlspecialchars($detail_tb_lapak['warna']) ?></li>
                        <li class="ms-3 list-group-item">Harga Sewa Mobil Perhari : <?= htmlspecialchars($detail_tb_lapak['harga']) ?></li>
                        <li class="ms-3 list-group-item">Pemilik : <?= htmlspecialchars($detail_tb_lapak['submit_with']) ?></li>
                    
                    </ul>
                    <div class="card-body">
                        <a class="ms-3 btn btn-primary" href="checkout.php" class="card-link">Checkout</a>
                            <?php if($_SESSION['ids'] == $detail_tb_lapak['id_tb_user']): ?>
                        <a class="ms-3 btn btn-warning" href="#" >Edit Postingan</a>
                        <a class="ms-3 btn btn-danger" href="hapusPrompt.php?id=<?=$id=$_GET['id'];?>" >Hapus Postingan</a>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

<?php include_once '../HPfooter.php'; ?>

<?php

else :
    session_unset();
    session_destroy();
    header("Location: landingpage.php");
    exit();


?>
<?php endif; ?>
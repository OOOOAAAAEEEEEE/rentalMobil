<?php include_once '../HPheader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

    
    <?php include_once 'navbar.php'; ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5> Penambahan Lapak Gagal </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Alasan: Tidak sesuai syarat</h5>
                <p class="card-text">Tolong cek kembali penulisan sesuai dengan placeholder yang ada,
                    pastikan tulis sesuai dengan formatnya dan tuliskan tanpa tanda petik (''), dan
                    pastikan gambar anda tidak lebih dari 10MB.
                </p>
                <a href="tambahDataLapak.php" class="btn btn-primary">Input kembali data anda</a>
            </div>
        </div>
    </div>

    <?php include_once '../HPfooter.php'; ?>

<?php

else :
    session_unset();
    session_destroy();
    header("Location:../dashboard.php");
    exit();


?>
<?php endif; ?>
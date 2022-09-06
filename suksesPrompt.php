<?php include_once 'HPheader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

    
    <?php include_once 'navbar.php'; ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5> Penambahan Photo Profile Berhasil! </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Data profile picture anda berhasil diperbarui.</h5>
                <p class="card-text">Silahkan cek profile anda, Terimakasih!.</p>
                <a href="profile.php" class="btn btn-primary">Kembali ke profile anda</a>
            </div>
        </div>
    </div>

    <?php include_once 'HPfooter.php'; ?>

<?php

else :
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit();


?>
<?php endif; ?>
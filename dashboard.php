<?php include_once 'HPHeader.php'; ?>

<?php

    if (isset($_SESSION['fullnames'])) :

?>

<?php include_once 'navbar.php'; ?>

    <div class="container">
        <div class="">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/uploads/1203181.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/uploads/1203335.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/uploads/1209038.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
        <hr>
    </div>
        
        <?php

        require 'inc/dashboard.inc.php';

        ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4">
            <?php foreach($fetch_tb_lapak_assoc as $tb_lapak): ?>
                <div class="">
                    <div class="col">
                        <div class="card mx-md-3 mx-lg-auto mt-3" style="width: 18.5rem;">
                            <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title"> <?= htmlspecialchars($tb_lapak['merk']); ?> </h3>
                                    <h5 class="card-title"> <?= htmlspecialchars($tb_lapak['sub_merk']); ?> </h5>
                                    <p class="card-text" style="text-align: center;"> Harga Sewa Perhari</p>
                                    <p class="card-text" style="text-align: center;"> <?= htmlspecialchars($tb_lapak['harga']); ?> </p>
                                    <a class="btn btn-primary" href="CRUD/detail.php?id=<?=$tb_lapak['id'];?>" > Detail</a>
                                </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php include_once 'HPfooter.php'; ?>

<?php else :
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
?>
<?php endif; ?>
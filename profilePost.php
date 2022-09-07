<?php include_once 'HPHeader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

    <?php include_once 'navbar.php'; ?>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="profile.php">Your Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="profilePost.php">Your Post</a>
            </li>
        </ul>
    </div>

    <?php 
        $id_SESSION1 = $_SESSION['ids'];
        $select_query1 = mysqli_query($conn, "SELECT * FROM tb_lapak WHERE id_tb_user='$id_SESSION1';");
        $fetch_select1 = mysqli_fetch_all($select_query1, MYSQLI_ASSOC);
    ?>
    
    <div class="container">
        <div class="card">
            <div class="card-body bg-body shadow-lg rounded">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4">
                <?php foreach($fetch_select1 as $tb_lapak): ?>
                    <div class="">
                        <div class="col">
                            <div class="card mx-md-4 mx-lg-auto mb-3" style="width: 16.5rem;">
                                <img src="https://via.placeholder.com/100" class="card-img-top img-thumbnail" alt="...">
                                    <div class="card-body shadow-lg bg-body rounded p-4">
                                        <h3 class="card-title"> <?= htmlspecialchars($tb_lapak['merk']); ?> </h3>
                                        <h5 class="card-title"> <?= htmlspecialchars($tb_lapak['sub_merk']); ?> </h5>
                                        <p class="card-text" style="text-align: center;"> Harga Sewa Perhari</p>
                                        <p class="card-text" style="text-align: center;"> <?= htmlspecialchars($tb_lapak['harga']); ?> </p>
                                        <div class="d-grid gap-1">
                                            <a class="btn btn-primary" href="CRUD/detail.php?id=<?=$tb_lapak['id'];?>" > Detail</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
            </div>
        </div>
        
    </div>
    <?php include_once 'HPfooter.php'; ?>

<?php

else :
    session_unset();
    session_destroy();
    header("Location: dashboard.php");
    exit();


?>
<?php endif; ?>
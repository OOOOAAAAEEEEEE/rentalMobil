<?php include_once 'HPHeader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

    <?php include_once 'navbar.php'; ?>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profile.php">Your Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profilePost.php">Your Post</a>
            </li>
        </ul>
    </div>

    <?php 
        $id_SESSION = $_SESSION['ids'];
        $select_query = mysqli_query($conn, "SELECT * FROM tb_user WHERE id='$id_SESSION';");
        $fetch_select = mysqli_fetch_all($select_query, MYSQLI_ASSOC);
        foreach($fetch_select as $loop_select);
    ?>

    <div class="container">
        <div class="card">
            <div class="card-body bg-body shadow-lg rounded">
            <img class="rounded mx-auto d-block" style="max-width:200px ; max-height:200px ;" src="img/uploadsProfile/<?=$loop_select['img_url'];?>" alt="">
                <div class="d-flex justify-content-center">
                    <div class="row row-cols-1">
                        <form action="inc/profile.inc.php" method="POST" enctype="multipart/form-data">
                            <div class="col">
                                <input class="form-control" name="my_image" type="file">
                            </div>
                            <div class="col">
                                <div class="d-grid gap-1">
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="card">
            <div class="card-body bg-body shadow-lg mb-5 rounded">
            
                <div class="input-group">
                    <span class="input-group-text my-2">Nama Panjang : </span>
                    <input type="text" name="fullname" class="form-control my-2" value="<?=$loop_select['fullname'];?>">
                </div>
                <div class="input-group">
                    <span class="input-group-text my-2">Username : </span>
                    <input type="text" name="username" class="form-control my-2" value="<?=$loop_select['username']?>"> 
                </div>
                <div class="input-group">
                    <span class="input-group-text my-2">Email : </span>
                    <input type="text" name="email" class="form-control my-2" value="<?=$loop_select['email'];?>">
                </div>
                <div class="input-group">
                    <span class="input-group-text my-2" id="basic-addon1">No Telephone : +62</span>
                    <input type="text" name="no_telp" class="my-2 form-control" value="<?=$loop_select['no_telp'];?>">
                </div>
                <div class="input-group">
                    <span class="input-group-text my-2">Alamat : </span>
                    <textarea type="text" class="form-control my-2" name="alamat"><?=$loop_select['alamat'];?></textarea>
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <button type="submit" name="kirim" class="btn btn-primary" > Submit Photo Profile </button>
                                <button type="submit" name="kirim1" class="btn btn-warning"> Edit Profile </button>
                            </div>
                        </div>
                    </div>
                </form>
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
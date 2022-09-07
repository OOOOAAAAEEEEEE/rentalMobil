<br><br><br>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
    <div class="container">
        <?php if (isset($_SESSION['fullnames'])) : ?>
            <a class="navbar-brand" href="dashboard.php?active">Rental Mobil</a>
        <?php else : ?>
            <a class="navbar-brand" href="index.php">Rental Mobil</a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION['fullnames'])): ?>    

                    <?php else: ?>

                        <?php if (isset($_GET['active'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?active">Landing Page</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?active">Landing Page</a>
                            </li>
                        <?php endif; ?>

                <?php endif; ?>

                <?php if (isset($_SESSION['fullnames'])) : ?>

                    <?php 
                    //include 'inc/conn.inc.php';
                    //$idSesi = $_SESSION['ids'];
                    //$alamatSesi = $_SESSION['alamats'];
                    //$fullnameSesi = $_SESSION['fullnames'];
                    //$no_telpSesi = $_SESSION['no_telps'];

                    //$checkFullnameQuery = mysqli_query($conn, "SELECT * FROM 
                    //tb_lapak WHERE id_tb_user='$idSesi';");
                    //$checkFullnames = mysqli_fetch_all($checkFullnameQuery, MYSQLI_ASSOC);
                    //foreach($checkFullnames as $checkFullname);

                        //if( $fullnameSesi !== $checkFullname['fullname_tb_user'] ||
                            //$alamatSesi !== $checkFullname['alamat_tb_user'] ||
                            //$no_telpSesi !== $checkFullname['no_telp_tb_user']

                        //):
                    ?>
                        <!-- <li class="nav-item">
                            <form action="inc/dashboard.inc.php" method="POST">
                                <button class="btn btn-dark nav-link" name="checkIntegrity">
                                    Update
                                </button>
                            </form>
                        </li> -->
                    <?php //else: ?>

                    <?php //endif; ?>
                
                <?php if(isset($_GET['active'])): ?>\
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php?active"> Dashboard </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="dashboard.php?active"> Dashboard </a>
                    </li>
                <?php endif; ?>

                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark">

                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="CRUD/tambahDataLapak.php">Tambah Lapak</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="inc/logout.inc.php">Log Out</a></li>

                <?php else : ?>

                <?php endif; ?>
                        </ul>
                    </li>
            </ul>
            <ul class="navbar-nav me-1 mb-2 mb-lg-0">
                <?php if (isset($_SESSION['fullnames'])) : ?>
                    <?php  
                        require 'inc/conn.inc.php';
                        $id_SESSION = $_SESSION['ids'];

                        $query_tb_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id='$id_SESSION';");
                        $fetch_tb_users = mysqli_fetch_all($query_tb_user, MYSQLI_ASSOC);
                        
                        foreach($fetch_tb_users as $fetch_tb_user);
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active">Selamat Datang <?php $fullnameS = $fetch_tb_user['fullname'];
                                                                                echo "$fullnameS"; ?></a>
                    </li>

                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="masuk.php">Login</a>  
                </li>
            </ul>
            <ul class="navbar-nav me-1 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="daftar.php"> Register</a>
                </li>
            </ul>
                <?php endif; ?>
        </div>
    </div>
</nav>
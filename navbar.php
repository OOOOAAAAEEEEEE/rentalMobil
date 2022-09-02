<br><br><br>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
    <div class="container">
        <?php if (isset($_SESSION['fullnames'])) : ?>
            <a class="navbar-brand" href="dashboard.php">Rental Mobil</a>
        <?php else : ?>
            <a class="navbar-brand" href="landingpage.php">Rental Mobil</a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_GET['active'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="landingpage.php?active">Landing Page</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="landingpage.php?active">Landing Page</a>
                    </li>
                <?php endif; ?>

                <?php if (isset($_SESSION['fullnames'])) : ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark">

                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ipsum</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="inc/logout.inc.php">Log Out</a></li>

                        <?php else : ?>

                        <?php endif; ?>
                        </ul>
                    </li>
            </ul>
            <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                <?php if (isset($_SESSION['fullnames'])) : ?>

                    <li class="nav-item">
                        <a class="nav-link active">Selamat Datang <?php $fullnameS = $_SESSION['fullnames'];
                                                                    echo "$fullnameS"; ?> </a>
                    </li>

                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
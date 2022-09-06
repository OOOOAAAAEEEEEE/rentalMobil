<?php include_once 'HPHeader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

    
    <?php include_once 'navbar.php'; ?>

    <div class="container-xxl">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="profile.php?id=">Your Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="profilePost.php?id=">Your Post</a>
            </li>
        </ul>
        
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
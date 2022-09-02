<?php include_once 'HPHeader.php'; ?>

<?php

if (isset($_SESSION['fullnames'])) :

?>

    
    <?php include_once 'navbar.php'; ?>

    <div class="container">

    </div>

    <?php include_once 'HPfooter.php'; ?>

<?php

else :
    session_unset();
    session_destroy();
    header("Location: landingpage.php");
    exit();


?>
<?php endif; ?>
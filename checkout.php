<?php include_once 'HPfooter.php'; ?>

<?php include_once 'HPHeader.php'; ?>

<?php

if ($_SESSION['fullnames'] == true) :

?>

<?php include_once 'HPheader.php'; ?>
    
<?php include_once 'navbar.php'; ?>

    <div class="container">
        <form action="" method="POST">
            <table>
                <thead>
                    <!--  -->
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label class="form-label"> Checkin </label>
                            <input class="form-control" type="date" name="checkin">
                        </td>
                        <td>
                            <label class="form-label"> Checkout </label>
                            <input class="form-control" type="date" name="checkout">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>     
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
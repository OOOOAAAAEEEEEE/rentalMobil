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
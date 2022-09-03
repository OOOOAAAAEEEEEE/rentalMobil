<?php

require '../../inc/conn.inc.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_lapak WHERE id='$id';");

header("Location:../hapusSukses.php");
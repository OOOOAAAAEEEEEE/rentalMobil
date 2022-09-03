<?php
require 'conn.inc.php';

$select_query = mysqli_query($conn, "SELECT * FROM tb_lapak;");
$fetch_tb_lapak_assoc = mysqli_fetch_all($select_query, MYSQLI_ASSOC);
<?php

include "./db_conn.php";

$sql = "SELECT * FROM produit ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

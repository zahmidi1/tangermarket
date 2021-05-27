<?php
require_once('./db_conn.php');

$id = $_GET['id'];
$category = $_GET['category'];
$sql = "DELETE FROM produit WHERE id='$id'";
$res = mysqli_query($conn, $sql);
header("location:./produit.php?produit=$category");
// produit.php?produit=phone
echo $category;

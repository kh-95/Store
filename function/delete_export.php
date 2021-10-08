<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM exporting WHERE id = $id ";
$conn->query($delete) ;
header("Location:../exports.php");


?>
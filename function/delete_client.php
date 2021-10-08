<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM client WHERE id = $id ";
$conn->query($delete) ;
header("Location:../client.php");


?>
<?php
include"connect.php";
$id = $_GET['id'];

$delete = "DELETE FROM employee WHERE id = $id ";
$conn->query($delete) ;
header("Location:../employee.php");


?>
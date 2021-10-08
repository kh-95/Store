<?php
if(isset($_POST['submit'])){

include "connect.php";
$id=$_POST['id'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$orderdate=$_POST['orderdate'];
$cname=$_POST['clientname'];
$cat=$_POST['cat'];
$update="UPDATE importing SET name='$name',quantity='$quantity',price='$price',orderdate='$orderdate',cat_id='$cat',id_client='$cname' WHERE id=$id";
$conn->query($update);
 header("Location:../imports.php");










}

?>
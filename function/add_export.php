<?php
if(isset($_POST['submit'])){
include "connect.php";

$name=$_POST['name'];

$quantity=$_POST['quantity'];
$price=$_POST['price'];
$cat=$_POST['ncategory'];
$client=$_POST['nclient'];
$date=date("y_m_d");

$insert="INSERT INTO exporting(name, quantity,price,id_cat, id_client,export_date) VALUES('$name','$quantity','$price','$cat','$client','$date')";
$conn->query($insert);

header("Location:../exports.php");







}



?>
<?php
if(isset($_POST['submit'])){
include "connect.php";

$name=$_POST['name'];

$quantity=$_POST['quantity'];
$price=$_POST['price'];
$cat=$_POST['ncategory'];
$client=$_POST['nclient'];
$date=date("y_m_d");

$insert="INSERT INTO importing(name, quantity,price,orderdate,cat_id, id_client) VALUES('$name','$quantity','$price','$date','$cat','$client')";
$conn->query($insert);

header("Location:../imports.php");







}



?>
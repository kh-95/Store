<?php
if(isset($_POST['submit'])){
include "connect.php";
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$code=$_POST['code'];
 $cat = $_POST['cat'];
 $insert="INSERT INTO client ( name ,phone , address,e_mail,id_cat,code) values('$name','$phone','$address','$email','$cat','$code')";
 $conn->query($insert);
 header("Location:../client.php");











}
?>
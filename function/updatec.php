<?php 
if(isset($_POST['submit'])){
	include"connect.php";
	$id = $_POST['id'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
$email=$_POST['email'];
$code=$_POST['code'];
$cat = $_POST['cat'];
$insert = "UPDATE client SET name = '$name' , phone = '$phone' , address = '$address' , e_mail = '$email'  WHERE id = $id";
$conn->query($insert);
header("Location:../client.php");
}
?>
<?php 
if(isset($_POST['submit'])){
	include"connect.php";
	$id = $_POST['id'];
	$username=$_POST['username'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];
$cat = $_POST['cat'];
$salary=$_POST['salary'];
$age=$_POST['age'];
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$role=$_POST['role'];

$insert = "UPDATE employee SET username = '$username' , phone = '$phone' , address = '$address' , salary = '$salary' ,age='$age',email='$email' ,password='$password',role_id='$role',start_time='$starttime',end_time='$endtime' WHERE id = $id";
$conn->query($insert);
header("Location:../employee.php");
}
?>
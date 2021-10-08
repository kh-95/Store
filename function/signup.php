<?php
if(isset($_POST['submit'])){

include "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$salary=$_POST['salary'];
$e_date = date("Y-m-d");
$role=$_POST['role'];
$address=$_POST['address'];

$insert="INSERT INTO employee (username,phone,address,salary,age,gender,email,e_date,password,role_id) values ('$username','$phone','$address','$salary','$age','$gender','$email','$e_date','$password','$role')";
$conn->query($insert);
header("Location:../page_user_login_1.php");














}
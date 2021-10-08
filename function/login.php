<?php
if(isset($_POST['submit'])){

session_start();
include "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM employee WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$id=$row['id'];
$role=$row['role_id'];
$count=$result->num_rows;
if($count>0)
{
$_SESSION['username']=$username;
$_SESSION['id']=$id;
$_SESSION['role']=$role;



header("Location:../index.php");

}else{
	header("Location:../page_user_login_1.php");
}}





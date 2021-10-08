<?php
if(isset($_POST['submit'])){

include "connect.php";
$name=$_POST['username'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$address=$_POST['address'];
$salary=$_POST['salary'];
$age=$_POST['age'];
$email=$_POST['email'];
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$gender=$_POST['gender'];
$role=$_POST['role'];
$edate=date("y_m_d");
$insert="INSERT INTO employee( username, phone, address, salary, age, gender, email, e_date, password, role_id, start_time, end_time) VALUES('$name','$phone','$address','$salary','$age','$gender','$email','$edate','$password','$role','$starttime','$endtime') ";
$conn->query($insert);
header("Location:../employee.php");











}
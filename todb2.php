<?php
$host="localhost";
$user="root";
$pass="";
$db="order_list";

$con= mysqli_connect($host,$user,$pass,$db);
$condb=mysqli_select_db($con,$db);

if($con)

{

$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$phonenum=$_POST['phonenum'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$level=$_POST['level'];
$type=$_POST['years'];
$attachment=$_POST['attachment'];



$query="INSERT INTO  orders(id,firstname,secondname,phonenum,email,msg,level,years,attachment) VALUES(NULL,'".$firstname."','".$secondname."','".$phonenum."','".$email."','".$msg."','".$level."','".$years."','".$attachment."')";
$send=mysqli_query($con,$query);
header("location:success.html");
	}?>

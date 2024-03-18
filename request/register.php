<?php
session_start(); 
include "../database/connection.php";



$name = secure($_POST['name']);
$phone = secure($_POST['phone']);
$password = secure($_POST['password']);
$block = secure($_POST['block']);
$property = 1;
$unit = secure($_POST['unit']);

$sql = "INSERT INTO users(name,phone,password,property_id,block,unit) VALUE('$name', '$phone', '".md5($password)."', '$property', '$block', '$unit')";
$query = mysqli_query($conn, $sql);

//check if user is created
if($query){

   header('location: ../user/dashboard.php?error=false');

}else{

    header('location: ../user/dashboard.php?error=true');

}



?>
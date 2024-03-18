<?php 
session_start(); 
include "../database/connection.php";

$name = secure($_POST['name']);
$phone = secure($_POST['phone']);
$block = secure($_POST['block']);
$unit = secure($_POST['unit']);
$user = secure($_POST['user']);


if($user){
$sql = 'UPDATE users SET name="'.$name.'", phone="'.$phone.'", block="'.$block.'", unit="'.$unit.'" WHERE user_id="'.$user.'"';
$query = mysqli_query($conn, $sql);

if($query){
    header('location: ../user/residents.php?error=false');
}else{
    header('location: ../user/residents.php?error=true');
}
}


?>
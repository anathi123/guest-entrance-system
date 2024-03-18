<?php
session_start();
include "../database/connection.php";

$phone = secure($_POST['phone']);
$password = secure($_POST['password']);
$security = secure($_POST['security']);

if(empty($security)){


 /// user login 
$sql ='SELECT * FROM  users WHERE phone= "'.$phone.'" AND password= "'.md5($password).'" ';
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);

if($num > 0){
   $row = mysqli_fetch_array($query);
  //set session
  $_SESSION['userID'] = $row['user_id'];
  header('location: ../resident/dashboard.php');

}else{
   
header('location: ../index.php?error=true');

}
}else{



//security login
$email = secure($_POST['email']);


$sql ='SELECT * FROM  property WHERE email= "'.$email.'" AND password= "'.md5($password).'" ';
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);

if($num > 0){
  $row = mysqli_fetch_array($query);

//set session
  $_SESSION['userID'] = $row['property_id'];

  header('location: ../user/dashboard.php');

}else{
   
header('location: ../security.php?error=true');

}


}

?>
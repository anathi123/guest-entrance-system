<?php 
session_start();
include "../database/connection.php";




$user = secure($_POST['user']);
if($user){
$sql='DELETE FROM users WHERE user_id="'.$user.'"';
$query = mysqli_query($conn, $sql);

if($query){
    header('location: ../user/residents.php?delete=true');
}else{
    header('location: ../user/residents.php?delete=false');
}

}


?>
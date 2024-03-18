<?php
session_start();
include "../database/connection.php";






$name = secure($_POST['name']);
$sql = 'INSERT INTO guest(name,date, user_id) VALUES("'.$name.'",  "'.date('Y-m-d').'", "'.$_SESSION['userID'].'")';
$query = mysqli_query($conn, $sql);

//check if user is created
if($query){
    $lastid = mysqli_insert_id($conn);
    $sql = 'INSERT INTO code(code, user_id, guest_id) VALUES("'.generateRandomNumber(6).'", "'.$_SESSION['userID'].'", "'.$lastid.'" )';
    $query = mysqli_query($conn, $sql);
    if($query){

    
   header('location: ../resident/dashboard.php?error=false');
    }else{

    header('location: ../resident/dashboard.php?error=true');

    }

}else{

    header('location: ../resident/dashboard.php?error=true');

}


?>
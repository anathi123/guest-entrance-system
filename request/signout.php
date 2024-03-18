<?php
session_start();
include "../database/connection.php";

$code = secure($_POST['code']);

$sql = 'SELECT * FROM code WHERE code="'.$code.'"';
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);

if($num > 0){

   $row = mysqli_fetch_array($query);

 
    $sql = 'UPDATE guest SET signout=1 WHERE guest_id="'.$row['guest_id'].'" ';
    $query = mysqli_query($conn, $sql);
     

    header('location: ../user/verify.php?error=false');
}else{
    header('location: ../user/verify.php?error=true');

}





?>
<?php 

//create connection to the database
$conn = mysqli_connect("localhost","root","","security");
if(!$conn){
	echo "Connection Failed";
}





//escape sql injection
function secure($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

# Random string generator
function generateRandomNumber($length) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomNumber = '';
    for ($i = 0; $i < $length; $i++) {
        $randomNumber .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomNumber;
}

?>
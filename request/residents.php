<?php 
session_start();
include "../database/connection.php";
 

if(!empty($_GET['search'])){


  //search user by name
    $sql ='SELECT * FROM users WHERE name LIKE "%'.$_GET['search'].'%" ORDER BY user_id DESC';
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
     while($row = mysqli_fetch_array($query)){
    ?>

<tr>
  <td><?php echo $row['name']?></td> <td><?php echo $row['block']." ".$row['unit']?></td> <td><?php echo $row['phone']?></td> 
  <td> 
<a data-target="#edit<?php echo $row['user_id']?>" data-toggle="modal" href="#"  class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>Edit</a> 
 <a data-target="#delete<?php echo $row['user_id']?>" data-toggle="modal"  href="#" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i>Delete</a>  
  </td> 
  </tr>


<?php
 }
}else{
    echo "No results found";
}
}else{


  // get all users
 $sql ="SELECT * FROM users ORDER BY user_id DESC";
 $query = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($query)){
                    ?>
  <tr>
  <td><?php echo $row['name']?></td> <td><?php echo $row['block']." ".$row['unit']?></td> <td><?php echo $row['phone']?></td> 
  <td> 
<a data-target="#edit<?php echo $row['user_id']?>" data-toggle="modal" href="#" class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i>Edit</a> 
 <a data-target="#delete<?php echo $row['user_id']?>" data-toggle="modal"  href="#" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i>Delete</a>  
  </td> 
  </tr>
 
              
        
<?php 
  }
}

?>
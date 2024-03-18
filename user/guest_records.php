<?php
session_start();
include "../database/connection.php";


?>
<!DOCTYPE html>
<html lang="en">

  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Tarllo Food Order System" />
    <meta name="author" content="Anathi" />
    <link rel="icon" href="assets/images/favicon.ico">
  
    <title>Secure Entrance</title>
    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="assets/css/custom.css" id="style-resource-8">
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script>
            // Wait for the HTML to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
  // Create a new instance of jsPDF
  var doc = new jsPDF();

  // Add content to the PDF
  doc.text('Hello, this is a sample PDF!', 10, 10);

  // Save the PDF
  doc.save('sample.pdf');
});

    </script>
</head>
  </head>
  <body class="page-body page-fade">
   
    <div class="page-container">
<?php include "sidebar.php"; ?>
      <div class="main-content">
     
        <hr />
        <div class="container row mb-3">
    <div class="col-md-3 ">
      <h4>Filter By Date</h4>
    <input type="date" class="form-control"  id="filter" onchange="filter()" placeholder="Search" style="border-color:navy; border-radius:50px;margin-bottom:20px;">
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-3">
      <a class="btn btn-success btn-sm btn-icon icon-left" onclick="downloadfile()"> <i class="entypo-download"></i>Download</a>  

      </div>
</div>
        <div class="container">
          <div id="print-out">
            Date: <?php 
            if(empty($_GET['date'])){
            echo date('Y-m-d');
            }else{

              echo $_GET['date'];
            }?>
        <table class="table table-bordered table-striped datatable " style="width:800px !important;" id="table-2"> 
            <thead> <tr> 
               
                 <th>Full Name</th><th>Contacts</th><th>Vehicle Registration</th>  <th>Date & Time</th><th>Signout Date & Time</th> </tr>
                 </thead>
                  <tbody> 
                    <?php 
                    

                    if(empty($_GET['date'])){
                    $sql = 'SELECT * FROM guest WHERE date= "'.date("Y-m-d").'"';
                    }else{
                      $sql = 'SELECT * FROM guest WHERE date= "'.secure($_GET['date']).'"';

                    }
                    $query = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_array($query)){
                 
                    ?>
                    <tr>
                    <td><?php echo $row['name']?></td> 
                    <td><?php echo $row['phone']?></td> 
                    <td><?php echo $row['vehiclereg']?></td>
                    <td><?php echo $row['time_stamp']?>  </td> 
                    <td><?php
                    if($row['time_out'] > $row['time_stamp']){
                     echo $row['time_out'];
                    }
                     
                     ?></td>
                    </tr>
                    <?php 
                         
                        }
                    }
                    ?>
             
      </table>
                  </div>
      
      </div>
 
    </div>

    
    
    <script>
      function filter(){
        var date = document.getElementById('filter').value;
        window.location.href ="?date="+date;
      }
      function downloadfile(){
    
        var element = document.getElementById('print-out');
        html2pdf(element);
      }
    </script>
    

    
    
    
    
    
    <link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css" id="style-resource-1">
    <link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css" id="style-resource-2">
    <script src="assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script>
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="assets/js/bootstrap.js" id="script-resource-3"></script>
    <script src="assets/js/joinable.js" id="script-resource-4"></script>
    <script src="assets/js/resizeable.js" id="script-resource-5"></script>
    <script src="assets/js/neon-api.js" id="script-resource-6"></script>
    <script src="assets/js/cookies.min.js" id="script-resource-7"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-8"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-9"></script>
    <script src="assets/js/jquery.sparkline.min.js" id="script-resource-10"></script>
    <script src="assets/js/rickshaw/vendor/d3.v3.js" id="script-resource-11"></script>
    <script src="assets/js/rickshaw/rickshaw.min.js" id="script-resource-12"></script>
    <script src="assets/js/raphael-min.js" id="script-resource-13"></script>
    <script src="assets/js/morris.min.js" id="script-resource-14"></script>
    <script src="assets/js/toastr.js" id="script-resource-15"></script>
    <script src="assets/js/neon-chat.js" id="script-resource-16"></script>
    <script src="assets/js/neon-custom.js" id="script-resource-17"></script>
    <script src="assets/js/neon-demo.js" id="script-resource-18"></script>
    <script src="assets/js/neon-skins.js" id="script-resource-19"></script>

  </body>
</html>
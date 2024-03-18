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
    <meta name="description" content="Secure" />
    <meta name="author" content="Anathi Mseleni" />
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
   
  </head>
  <body class="page-body page-fade">
  
    <div class="page-container">
<?php include "sidebar.php"; ?>
      <div class="main-content">
        <div class="row">
          <i class="fas fa-user" style="float:right;"></i>
        </div>
        <hr />
        <div class="container">

        <div style="margin-bottom:50px;"></div>
        <div class="row">

        </div>
        <div class="row">
        <?php
                          
                          if(!empty($_GET['error']) && $_GET['error'] == 'true'){
                                ?>
                    <center>
                    <img src="../assets/img/cross.png" width="100px">
                    <h4 > Error! Access-code not valid</h4>
                    <a href="dashboard.php">  <button class="btn btn-success "><- Back</button>s
                    </center>                              

                              <?php } ?>
                
                               <?php
                                          
                          if(!empty($_GET['error']) && $_GET['error'] == 'false'){
                                                ?>
                               

                               <center>
                            <img src="../assets/img/correct.png" width="100px">
                            <h4 > Access-code Valid</h4>
                            <br/>
                          <a href="dashboard.php">  <button class="btn btn-success "><- Back</button>
                                </center>



                                <?php }?>

</div>

<div class="col-md-4"></div>

      </div>
 
    </div>


              

    


    
    
    
    
    
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
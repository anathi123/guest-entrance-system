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
        <?php
                          
          if(!empty($_GET['error']) && $_GET['error'] == 'true'){
                ?>
              <div class="alert alert-danger col-md-6">Error! Could not register resident.</div>
               <?php }?>

               <?php
                          
          if(!empty($_GET['error']) && $_GET['error'] == 'false'){
                                ?>
                <div class="alert alert-success col-md-6">Resident registered successfully</div>
                <?php }?>
        </div>
        <div class="row">
          
            <a data-target="#add" data-toggle="modal" href="#">
          <div  class="col-md-3 col-xs-12">
            <div class="tile-stats tile-yellow">
              <div class="icon">
                <i class="entypo-users"></i>
              </div>
              
              <h3 style="color:white !important;">Add Resident</h3>
              </a>
            </div>
          </div>
          <a data-target="#verify" data-toggle="modal" href="#">
          <div  class="col-md-3 col-xs-12">
            <div class="tile-stats tile-yellow">
              <div class="icon">
                <i class="entypo-users"></i>
              </div>
              
              <h3 style="color:white !important;">Verify Access-Code</h3>
              </a>
            </div>
          </div>
          <a data-target="#signout" data-toggle="modal" href="#">
          <div  class="col-md-3 col-xs-12">
            <div class="tile-stats tile-yellow">
              <div class="icon">
                <i class="entypo-users"></i>
              </div>
              
              <h3 style="color:white !important;">Sign-out Guest</h3>
              </a>
            </div>
          </div>
      </div>
 
    </div>


              
          
          
    <form action="../request/register.php" method="POST" >
    <div class="modal fade in" id="add" style=" padding-right: 17px;margin-top:10%;">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#2c79b8;color:white;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title" style="color:white;">Register Resident</h2>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
        <h4 style="color:white;">Fullname</h4>
        <input type="text" name="name" class="form-control" required autocomplete="off">
      </div>
      <div class="col-md-6">
          <h4 style="color:white;">Contacts</h4>
          <input type="number" name="phone" placeholder="Cell number" class="form-control" required autocomplete="off">
        </div>
        
      </div>
      <div class="row">
          <div class="col-md-6">
        <h4 style="color:white;">Block</h4>
        <input type="text" name="block" class="form-control" required autocomplete="off">
      </div>
      <div class="col-md-6">
          <h4 style="color:white;">Unit number</h4>
          <input type="number" name="unit" placeholder="Unit number" class="form-control" required autocomplete="off">
        </div>
        
      </div>
      <div class="row">
          <div class="col-md-6">
        <h4 style="color:white;">Password</h4>
        <input type="password" id="password" class="form-control" required autocomplete="off">
      </div>
      <div class="col-md-6">
          <h4 style="color:white;">Confirm Password</h4>
          <input type="password" id="password2" name="password"  class="form-control" required autocomplete="off">
        </div>
        
      </div>
     
      </div>
      <div class="modal-footer">
           <button class="btn btn-danger">Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</form>
    
<form action="../request/verify.php" method="POST" >
    <div class="modal fade in" id="verify" style=" padding-right: 17px;margin-top:10%;">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#2c79b8;color:white;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title" style="color:white;">Verify Access-code</h2>
      </div>
      <div class="modal-body">
        <div id="results">
        <div class="row">
     <div class="col-md-12">
        <h4 style="color:white;">Access-code</h4>
        <input type="text" name="code" id="code" class="form-control" required autocomplete="off">
      </div>

      <div class="col-md-12">
        <h4 style="color:white;">Contacts</h4>
        <input type="number" name="contacts" id="contacts" class="form-control" required autocomplete="off">
      </div>

      <div class="col-md-12">
        <h4 style="color:white;">Vehicle Registration if available</h4>
        <input type="text" name="vehicle" id="vehicle" class="form-control" autocomplete="off">
      </div>
          </div>
          </div>
   <div id="outcome"></div>
     
      </div>
      <div class="modal-footer">
           <button class="btn btn-danger">Verify</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</form>


<form action="../request/signout.php" method="POST" >
    <div class="modal fade in" id="signout" style=" padding-right: 17px;margin-top:10%;">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#2c79b8;color:white;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title" style="color:white;">Sign-out guest</h2>
      </div>
      <div class="modal-body">
        <div id="results">
        <div class="row">
          <div class="col-md-12">
        <h4 style="color:white;">Access-code</h4>
        <input type="text" name="code" id="code" class="form-control" required autocomplete="off">
      </div>
    
          </div>
          </div>
   <div id="outcome"></div>
     
      </div>
      <div class="modal-footer">
           <button class="btn btn-danger">Sign-out</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</form>

    
    
    
    
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
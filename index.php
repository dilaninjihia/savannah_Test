<?php
include_once("php_includes/header4.php");
include_once("php_includes/footer.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Home</title>
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <script src="js/validation.js"></script>   
    <script type="text/javascript"></script>
  </head>
  <body>
    <div id="userbar">
      <?php
      if($_SESSION['status']==1)
      {
        echo '<nav><ul><li><a href="">CLIENTS</a>
                 <ul>
                     <li><a href="register.php">Add Client</a></li>
                     <li><a href="vehicle.php">Add Vehicle</a></li>
           <li><a href="updateUser.php">Update Client Details</a></li>
                 </ul>
             </li>
             <li><a href="">APPOINTMENTS</a>
                 <ul>
                     <li><a href="appointments.php">All Appointments</a></li>                     
                     
                     <li><a href="message.php">Messaging</a> </li>                               
                 </ul>
             </li>
             <li><a href="">USERS</a>
         <ul>
         <li><a href="viewtenders.php">View Tenders</a></li> 
       <li><a href="viewVehicles.php">View Vehicles</a></li> 
       
         </ul>
             </li>
             
             
        </nav> .';
      }
      ?>
    </div>


    <div id="signupform" style="width:400px; margin-right: auto; margin-bottom: 70px; margin-left:auto; margin-top: 100px; background-color: #F3F9DD; padding: 20px; border-radius: 8px;">
      <strong><em id="siteinfo">About TENDERFY-Tenders For You</em></strong> <br/>
                          <?php echo 'Welcome, ' . $_SESSION['user'] .' phone->'. $_SESSION['phone_number'].' user id->'. $_SESSION['user_id'].'';?>
        <p>
           <em>
           This is an automated short text messaging solution to remind clients on expiry their car insurance<br />
           to heed traffic rules in an effort to reduce the damage that is experienced in case of an accident.
           
           </em>
        </p>
    
    </div>



   
  
</html>
<?php
include_once("php_includes/header1.php");
include_once("php_includes/footer.php");
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Sign in</title>
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <script src="js/editv.js"></script>   
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


         <!--User Signup form-->

    <div id="" style="width:400px; margin-right: auto; margin-bottom: 70px; margin-left:auto; margin-top: 100px; background-color: #F3F9DD; padding: 20px; border-radius: 8px;">

    <h2>Edit profile</h2> 

    <form class="editform" role="form" method="post" onSubmit="return validateEdits()" name="editform" action="update.php">

      <div class="form-group">
        <label for="exampleInputEmail1">Email Address:</label>
          <input type="email" class="form-control" id="inputEmail3" placeholder=<?php echo ''.$_SESSION['email'].'' ?>  name="email">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Username:</label>
          <input type="username" class="form-control" id="inputEmail3" readonly= "readonly" placeholder=<?php echo ''.$_SESSION['user'].'' ?> name="uname">
      </div>

      <div class="form-group">
        <label for="phonenumber">Phone number:</label>
          <input type="phonenumber" class="form-control" id="inputEmail3" placeholder=<?php echo ''.$_SESSION['phone_number'].'' ?> name="phone">
      </div>

      <button type="submit" class="btn btn-primary">Submit Edit</button>
    </form>
    </div>
</html>
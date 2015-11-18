<?php
include_once("php_includes/header4.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Upload Tender</title>
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


         <!--User Signup form-->

    <div id="" style="width:400px; margin-right: auto; margin-bottom: 70px; margin-left:auto; margin-top: 100px; background-color: #F3F9DD; padding: 20px; border-radius: 8px;">

    <h2>Upload Tender</h2> 

    <form class="" role="form" method="post" onSubmit="return validate()" name="signupform" action="tenders.php">

      <div class="form-group">
        <label for="">Tender No::</label>
          <input type="varchar" class="form-control" id="" placeholder="Tender No" required="required" name="tnumber">
      </div>

      <div class="form-group">
        <label for="">Tender name:</label>
          <input type="text" class="form-control" id="" placeholder="Tender name" required="required" name="tname">
      </div>

      <div class="form-group">
        <label for="">Name of organization:</label>
          <input type="text" class="form-control" id="" placeholder="Name of organization" required="required" name="oname">
      </div>

      <div class="form-group">
        <label for="">Category:</label>
        <select class="form-control" placeholder="Category" name="category">
          <option value="category" ></option>
          <option value="ct01">Works</option>
          <option value="ct02">Services</option>
          <option value="ct03">Supplies</option>
        </select>
      </div>

      <div class="form-group">
        <label for="">Additional information:</label>
          <textarea class="form-control" rows="3" placeholder="This icludes where tender is to be collected or dropped at or whether it is to be bought" required="required" name="info"></textarea>
      </div>

      <div class="form-group">
        <label for="">Closing Date:</label>
          <input type="datetime" placeholder="yyyy-mm-dd" class="form-control" id="" required="required" name="cdate">
      </div>

      <button type="submit" class="btn btn-primary">Upload Tender</button>
    </form>
    </div>
  </body>
  <div id="bottomdiv">
          <em>Tenderfy@copyright2014<br />
          By using this system, you agree to the <b>Terms</b> and <b>Conditions</b> and its <b>Privacy Policy.</b>
          </em>
      </div> 
           
   </body>
</html>
<?php
session_start();
include_once("php_includes/header4.php");
//include_once("php_includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Home</title>
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <script src="js/validation.js"></script>   
    <script type="text/javascript"></script>
  </head>
   
         
<div id="userbar">
  <?php
    if($_SESSION['status']==1)
    {
        
        echo '<nav><a href="signin.php">Sign in</a> or <a href="sign up">create an account</a></nav>.';
    }?>
</div>
         
  <body>
   
        <br />
        <br />


    <div id="signupform" style="width:400px; margin-right: auto; margin-bottom: 70px; margin-left:auto; margin-top: 100px; background-color: #F3F9DD; padding: 20px; border-radius: 8px;">
      <strong><em id="siteinfo">About TENDERFY-Tenders For You</em></strong> <br/>
        <p>
           <em>
           This is an automated short text messaging solution to remind clients on expiry their car insurance<br />
           to heed traffic rules in an effort to reduce the damage that is experienced in case of an accident.
           
           </em>
        </p>
    
    </div>
  
</html>
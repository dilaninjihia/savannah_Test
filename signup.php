<?php
include_once("php_includes/header3.php");
//include_once("php_includes/footer.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Sign up</title>
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <script src="js/validation.js"></script>   
    <script type="text/javascript"></script>
  </head>
  <body>


         <!--User Signup form-->

    <div id="signupform" style="width:400px; margin-right: auto; margin-bottom: 70px; margin-left:auto; margin-top: 100px; background-color: #F3F9DD; padding: 20px; border-radius: 8px;">

    <h2>Sign up</h2> 

    <form class="signupform" role="form" method="post" onSubmit="return validate()" name="signupform" action="Usercreate.php">

      <div class="form-group">
        <label for="exampleInputEmail1">Email Address:</label>
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="required" name="email">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Username:</label>
          <input type="username" class="form-control" id="inputEmail3" placeholder="Username" required="required" name="uname">
      </div>

      <div class="form-group">
        <label for="phonenumber">Phone number:</label>
          <input type="phonenumber" class="form-control" id="inputEmail3" placeholder="+2547xx-xxx-xxx" required="required" name="phone">
      </div>

      <div class="form-group">
        <label for="exampleinputPassword1">Password:</label>
          <input type="Password" class="form-control" id="inputPassword3" placeholder="Password" required="required" name="pass1">
      </div>

      <div class="form-group">
        <label for="exampleinputPassword1">Verify Password:</label>
          <input type="password" class="form-control" id="inputPassword3" placeholder="Verify Password" required="required" name="pass2">
      </div>

      <button type="submit" class="btn btn-primary">Sign up</button>
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
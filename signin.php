<?php
include_once("php_includes/header2.php");
include_once("php_includes/footer.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign in</title>
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <script src="js/phonevalidation.js"></script>
  </head>
  <body>

    <div id="signinform" style="width:400px; margin-right: auto; margin-left:auto; margin-top: 100px; background-color: #F3F9DD; padding: 20px; border-radius: 8px;">
    
    <h2>Sign in to Tenderfy</h2>

    <form class="signinform" role="form" method="post" name="signinform" onSubmit="return validateForm()" action="Sessionset.php">

      <div class="form-group">
        <label for="exampleInputEmail1">Enter phone number:</label>
          <input type="" class="form-control" id="inputEmail3" placeholder="Phone" required="required" name="phone">
      </div>

      <div class="form-group">
        <label for="exampleinputPassword1">Password:</label>
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="required" name="password">
      </div>

      <button type="submit" class="btn btn-primary" onsubmit="return validateForm()">Sign in</button>
    </form>
    </div>
 
</html>
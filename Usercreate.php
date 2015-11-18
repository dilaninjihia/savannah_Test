<?php

$con=mysqli_connect("localhost","root","","tenderfy_test");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$email= mysql_real_escape_string($_POST['email']);
$uname= mysql_real_escape_string($_POST['uname']);
$phone= mysql_real_escape_string($_POST['phone']);
$pass= mysql_real_escape_string($_POST['pass1']);
$p_hash= md5($pass);
$result=mysqli_query($con,"SELECT * FROM user where phone_number='$phone'"); 


if(mysqli_num_rows($result)==0){
$register = mysqli_query($con,"INSERT INTO user (phone_number, name, email, password) VALUES  ('{$phone}','{$uname}','{$email}','{$p_hash}')");  	    
	
	?>
	<script>
        alert("Registration successful!");
        window.location="index.php";
        </script>
        <?php
		}else{
		?>
			<script>
        alert("Phone number already in use");
        window.location="signup.php";
        </script>
		<?php
    	}
?>

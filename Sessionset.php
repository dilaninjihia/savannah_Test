<?php

session_start();
include_once("php_includes/db_connection.php");


$uphone=$_POST['phone'];// should make it a phone number because it sia eunique
$pass=$_POST['password'];
$p_hash=md5($pass);

$result=mysqli_query($db_connection,"SELECT * FROM user"); //or die(mysql_error());

while ($user = mysqli_fetch_array($result)){
	  if(($user['phone_number']==$uphone) && ($user['password']==$p_hash)){
	  $_SESSION['signed_in'] = true;
	  $_SESSION['user']=$user['name'];
	  $_SESSION['email']=$user['email'];
	  $_SESSION['Timer']=time();//current time
	  $_SESSION['limit']=$_SESSION['Timer']+(600);//current time + 10 minutes
	  $_SESSION['phone_number']=$user['phone_number'];
	  $_SESSION['status']=$user['status'];
	  $_SESSION['user_id']=$user['user_id'];
	
	  header('Location:index.php');

    } else {
    	?>
	  	<script>
	  	alert("Sorry, try again!Username and/or password are incorrect!");
	  	window.location="signin.php";
	  	</script>
	  	<?php
    }
  }
?>
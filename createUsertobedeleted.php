<?php

$db_connection = mysqli_connect("localhost", "root", "", "tenderfy_test");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
$email= mysql_real_escape_string($_POST['email']);
$uname= mysql_real_escape_string($_POST['uname']);
$phone= mysql_real_escape_string($_POST['phone']);
$pass= mysql_real_escape_string($_POST['pass1']);
$p_hash= md5($pass);

$sql = "INSERT INTO user (phone_number, name, email, password)       
       VALUES('$phone','$uname','$email','$p_hash')";
$query = mysqli_query($db_connection, $sql); 
}	
?>
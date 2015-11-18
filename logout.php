<?php
//include "createuser.php";
session_start();
// Set Session data to an empty array
$_SESSION = array();
session_destroy();
// Double check to see if their sessions exists
if(isset($_SESSION['user'])){
	?>
	<script>
	alert("Logout failed.");
	window.location="index.php";
	</script>
	<?php

} else{
	?>
	<script>
	alert("You have been logged out!Log in to access system.");
	window.location="signin.php";
	</script>
	<?php
}


?>

<?php
Session_start();
include_once("php_includes/db_connection.php");


$tnumber= mysql_real_escape_string($_POST['tnumber']);
$tname= mysql_real_escape_string($_POST['tname']);
$oname= mysql_real_escape_string($_POST['oname']);
$category= mysql_real_escape_string($_POST['category']);
$info= mysql_real_escape_string($_POST['info']);
//$cdate= date_format('%Y %m %d', ($_POST['cdate']));
//$cdate = date("Y-m-d", strtotime($_POST['cdate']));
$cdate = $_POST['cdate'];
$phone = $_SESSION['phone_number'];
$client_id = $_SESSION['user_id'];



//$result=mysqli_query($con,"SELECT * FROM user where phone_number='$phone'");
//$sqll = "SELECT client_id FROM user where phone_number='$phone' LIMIT=1";

$sql = "INSERT INTO tenders (tender_no, tender_name, tender_info, organization_nme, category_id, user_id, closing_date)       
       VALUES('$tnumber','$tname','$info','$oname','$category', '$client_id','$cdate')";
$query = mysqli_query($db_connection, $sql); 



if (!$query) {  	    
	    ?>
	    <script>
        alert("Tender upload unsuccessful!");
        window.location="uptender.php";
        </script>
        <?php
	}else{
		?>
		<script>
        alert("Tender upload successful");
        window.location="index.php";
        </script>
		<?php
         }
   
?>

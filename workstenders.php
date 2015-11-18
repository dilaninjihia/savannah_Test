<?php






include_once("php_includes/db_connection.php");
include_once("php_includes/header4.php");
session_start();
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
             <li><a href="">VIEW TENDERS</a>
         <ul>
         <li><a href="viewtenders.php">All Tenders</a></li> 
       <li><a href="">Works Tenders</a></li> 
       <li><a href="suppliestenders.php">Supplies Tenders</a></li> 
       <li><a href="servicestenders.php">Services Tenders</a></li> 
       
         </ul>
             </li>
             
             
        </nav> .';
      }
      ?>
    </div>
<?php
//Display messages sent
$header=<<<HAH
<div id="signupform" style="width:400px; margin-right: auto; margin-bottom: 20px; margin-left:auto; margin-top: 50px; background-color: #F3F9DD; padding: 10px; border-radius: 8px;">
<h2>Works Tenders</h2>
</div>
<table class="table table-striped" width=85% cellpadding="2"; cellspacing="2" style="border: 15px solid #ffffff;" >
<tr>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">No.</th>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">Category</th>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">Tender no.</th>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">Tender name</th>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">Organisation</th>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">Upload by</th>
<th style="color:#CCC;
background:#333;
opacity: .9;
padding:5px;">Closing date</th>
</tr>        
HAH;

echo $header;
$counter = 1; 
       
  //if($access_lvl == '1'){
  //$query = "SELECT tender.category_id,tender.tender_no,tender.tender_name,tender.organization_nme,tender.user_id,tender.closing_date FROM tenders ORDER BY category_id " ;
 //$query = "SELECT category_id,tender_no,tender_name,organization_nme,user_id,closing_date FROM tenders ORDER BY closing_date desc";
 $query = "SELECT category.category_name, tenders.tender_no, tenders.tender_name, tenders.organization_nme, user.name, tenders.closing_date  FROM tenders, category, user WHERE tenders.user_id=user.user_id AND tenders.category_id=category.category_id AND category.category_id='ct01' ORDER BY closing_date desc"; 
 
  
$result = mysqli_query($db_connection,$query);
 
    if (!$result)
    {
        echo (mysql_error() . "<br>");
       
    }
    
    while ($row = mysqli_fetch_assoc($result))
        {
        
          echo "<tr>\n";
          echo "<td>\n";
          echo "$counter";
          echo "</td>\n";
          foreach($row as $value){          
          echo "<td>\n";          
          echo "$value";
          echo "</td>\n";
      }
      echo "</tr>\n";
      $counter++;
      }
      
echo "</table>\n";

echo "<br>";
echo "<br>";
echo "<br>";

?>

  </body>
  <div id="bottomdiv">
          <em>Tenderfy@copyright2014<br />
          By using this system, you agree to the <b>Terms</b> and <b>Conditions</b> and its <b>Privacy Policy.</b>
          </em>
      </div> 
           
   </body>
</html>

















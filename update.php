<?php 
include_once("php_includes/db_connection.php");
session_start();

  //if(isset($_POST['submit']) && $_POST['submit'] == "submit"){
    $client_id= $_SESSION['user_id'];
    $name= $_POST['uname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];

    
    
       
     
$result=mysqli_query($db_connection,"SELECT * FROM user where phone_number='$phone'"); 
if(mysqli_num_rows($result)==0)
{     
    
    if (isset($_POST['uname']) && $_POST['uname'] != "" && $_POST['uname'] != null )
    {
        $update= "UPDATE user SET name = '$name' WHERE user_id = '$client_id' ";
        $result = mysqli_query($db_connection,$update);
        if(!$result)
        {
            ?>
                <script>
                    alert("Update unsuccessful!");
                    window.location="editp.php";
                </script>
            <?php
             die(mysql_error());
        }
        else
        {
            ?>
                <script>
                    alert("Update successful!");
                    window.location="editp.php";
                </script>
            <?php
        }
    }
   if (isset($_POST['email']) && $_POST['email'] != "" && $_POST['email'] != null )
   {
        $_SESSION['email']= $_POST['email'];
        $update= "UPDATE user SET email = '$email' WHERE user_id = '$client_id'";
        $result = mysqli_query($db_connection,$update);
        if(!$result)
        {
            ?>
                <script>
                    alert("Update unsuccessful!");
                    window.location="editp.php"
                </script>
            <?php
            die(mysql_error());
        }
        else
        {
            ?>
                <script>
                    alert("Update successful!");
                    window.location="editp.php";
                </script>
            <?php
        }
    } 
    if (isset($_POST['phone']) && $_POST['phone'] != "" && $_POST['phone'] != null )
    {
        $_SESSION['phone_number']= $_POST['phone'];
        $update= "UPDATE user SET phone_number = '$phone' WHERE user_id = '$client_id'";
        $result = mysqli_query($db_connection,$update);
        if(!$result) 
        {
            ?>
                <script>
                    alert("Update unsuccessful!");
                    window.location="editp.php";
                </script>
            <?php
            die(mysql_error());
        }
        else
        {
            ?>
                <script>
                    alert("Update successful!");
                    window.location="editp.php";
                </script>
            <?php
        }
    }
    else
    {
            ?>
                <script>
                    alert("No edits were made!");
                    window.location="editp.php";
                </script>
            <?php
    } 
}
else
{
    ?>
        <script>
            alert("Phone number already in use");
            window.location="editp.php";
        </script>
        <?php
}
?>
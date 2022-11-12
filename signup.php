<?php
 $dbhost = "localhost";
$dbUser = "root";
$dbpass = "";
$db = "login_db";

$conn = new mysqli($dbhost, $dbUser, $dbpass, $db);
 // if($conn->connect_error) {
   // echo "ERROR -404";
  //} else {
    //echo "connected";
  //}

  
   $Username=$_POST['Username'];
  $password=$_POST['password'];
  $Email=$_POST['Email'];
//echo $Username;
//echo $password;
//echo $Email;
  
  $query = "INSERT INTO registration (Username, password, Email) VALUES ('$Username', '$password', '$Email')";
   mysqli_query($conn, $query);
{
    echo "<h3>You have registered successfully!!</h3>";
    
}



 ?>
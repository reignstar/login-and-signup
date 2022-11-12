<?php
 $dbhost = "localhost";
$dbUser = "root";
$dbpass = "";
$db = "login_db";

$conn = new mysqli($dbhost, $dbUser, $dbpass, $db);
  //if($conn->connect_error) {
    //echo "ERROR -404";
  //} else {
    //echo "connected";
  //}
$Username=$_POST['Username'];
 $password=$_POST['password'];
 $Email=$_POST['Email'];
//echo $Username;
//echo $password;
//echo $Email;
$sql = "SELECT * FROM registration WHERE Username = '$Username' AND password = '$password'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 if($row['Username']==$Username & $row['password']==$password & $row['Email']==$Email){
    echo("welcome").$Username."you are succefully logged in!!!";
 }else{
    echo"<script>alert('check your credentials')</script>";
    echo"<script>location.replace('login Registration.html')</script>";
 }


 ?>

 
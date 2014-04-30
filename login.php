<?php

//session_start();

$con=mysqli_connect('localhost','root','','cis');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
//check if the entered emailid and password exists
if(isset($_POST['username']) && isset($_POST['password']))
{
//if yes assign the entered values to variables
$email=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$privilege=mysql_real_escape_string($_POST['privilege']);
}

//process the query 
$sql="SELECT * FROM userprofiles WHERE upUserName='$email' and upPassword='$password'";
$result=mysqli_query($con,$sql);

//check if the number of rows returned is 1
if(mysqli_num_rows($result) == 1)
 { 
  //check if it is the admin
  if($privilege=='admin')
  {
  include("Homepage.php");
  }
  else
  {
 //if yes display the welcome page
  //include("welcome.html");
    
    include("login_error.html");
  }
 } 
 
 else 
 {
 //displays data entered is wrong
  //include("error_2.html");
  include("login_error.html");
  
  }
 
 
 ?>
 
 
 
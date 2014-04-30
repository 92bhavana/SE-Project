<?php
session_start();

$con=mysqli_connect("localhost","root","","cis") or die (mysql_error ());


$err=0;

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="INSERT INTO interactionlog (date,ilCName,ilContact,ilPeople,ilLocation) 
Values ('$_GET[dat]','$_GET[companyName]','$_GET[contactPerson]','$_GET[peoplePresent]','$_GET[optionsRadios]') ";
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
else 
{
	include("IL_success.php");
} 
?>	
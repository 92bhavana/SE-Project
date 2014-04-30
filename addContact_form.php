<?php
session_start();


$con=mysqli_connect("localhost","root","","cis") or die (mysql_error ());

$err=0;

$contactName=$_GET['contactName'];
if($contactName=="")
{
	$err=1;
}

$cName=$_GET['cName'];
if($cName=="")
{
	$err=1;
}

$officeName=$_GET['officeName'];
if($officeName=="")
{
	$err=1;
}
$designation=$_GET['designation'];
if($designation=="")
{
	$err=1;
}
$mobileNumber=$_GET['mobileNumber'];
if($mobileNumber=="")
{
	$err=1;
}
$email=$_GET['email'];
if($email=="")
{
	$err=1;
}


$contactName=$_GET['contactName'];
$cName=$_GET['cName'];
$officeName=$_GET['officeName'];
$designation=$_GET['designation'];
$mobileNumber=$_GET['mobileNumber'];
$email=$_GET['email'];



$sql = "Insert into contacts (contactName,cName,officeName,designation,mobileNumber,email)values('".$contactName."','".$cName."','".$officeName."','".$designation."','".$mobileNumber."','".$email."')";


if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

else
{
	include("add_contact_success.php");
}

?>
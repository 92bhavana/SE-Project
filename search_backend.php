<?php
include "mysql_connection.php";


$contactName = $_POST["contactName"];
$email = $_POST["email"];

if ($contactName == "" && $email != "") {
	$result = mysqli_query($con,"SELECT * FROM cap
	WHERE email = '$email'");
	}

if ($contactName != "" && $email == "") {
	$result = mysqli_query($con,"SELECT * FROM cap
	WHERE contactName = '$contactName'");
	}

if ($contactName != "" && $email != "") {
	$result = mysqli_query($con,"SELECT * FROM cap
 	WHERE contactName = '$contactName' AND email = '$email'");
	}

if ($contactName == "" && $city != "") {
	$result = mysqli_query($con,"SELECT * FROM cap
 	WHERE contactName = '$contactName' AND city = '$city'");
	}

if ($contactName != "" && $city == "") {
	$result = mysqli_query($con,"SELECT * FROM cap
 	WHERE contactName = '$contactName' AND city = '$city'");
	}

if ($contactName != "" && $city != "") {
	$result = mysqli_query($con,"SELECT * FROM cap
 	WHERE contactName = '$contactName' AND city = '$city'");
	}

if ($email == "" && $city != "") {
	$result = mysqli_query($con,"SELECT * FROM cap
 	WHERE email = '$email' AND city = '$city'");
	}


if ($email != "" && $city == "") {
	$result = mysqli_query($con,"SELECT * FROM cap
 	WHERE email = '$email' AND city = '$city'");
	}s

while($row = mysqli_fetch_array($result))
  {
  echo $row['capCompany'];
  echo "<br>";
  }

?>
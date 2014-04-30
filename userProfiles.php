<!DOCTYPE html>
<html>
<body>
		<?php

		// Create connection
		$con=mysqli_connect("localhost","root","","cis");

		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

  		$sql="INSERT INTO  userprofiles (upName, upUserName, upPassword, privileges)
			  VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[privilege]')";

        if (!mysqli_query($con,$sql))
        {
   			die('Error: ' . mysqli_error($con));
  		}

		else
		{
			include("UP_success.php");
		}
		?>

	</body>
	</html>












		
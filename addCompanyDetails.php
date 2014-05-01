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

  		
  		$sql="INSERT INTO  company (cName, cDescription, tags)
			  VALUES ('$_POST[cname]','$_POST[cdesc]','$_POST[tname]')";

        if (!mysqli_query($con,$sql))
        {
   			die('Error: ' . mysqli_error($con));
  		}


      $sql="INSERT INTO offices (officeName, cName, address, city, state, location)
          VALUES ('$_POST[oname]','$_POST[cname]','$_POST[addr]','$_POST[city]','$_POST[state]','$_POST[loc]')";

      if (!mysqli_query($con,$sql))
        {
        die('Error: ' . mysqli_error($con));
      }


  		$sql="INSERT INTO contacts (contactName, cName, officeName, designation, mobileNumber, email, btech, mtech, mba)
  			  VALUES ('$_POST[name]','$_POST[cname]','$_POST[oname]','$_POST[desig]','$_POST[num]','$_POST[email]','$_POST[intake]','$_POST[intake]','$_POST[intake]')";

  		if (!mysqli_query($con,$sql))
        {
   			die('Error: ' . mysqli_error($con));
  		}

			include("add_comp_success.php");
		

		?>

	</body>
	</html>

  		 
<?php
		mysql_connect("localhost","root","") or die (mysql_error ());

		mysql_select_db("cis") or die(mysql_error());

?>
<html>
<head>

	<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="search.css">
    	<style type="text/css">a {text-decoration: none} </style>
	<title>CIS List of Companies</title>
</head>
<body>
	<div class="container-fluid">
	<div class="container">

		<!--************************* Navbar starts here *************************-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Corporate Information System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
            
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="listOFCompanies.php">Company</a></li>
                <li><a href="addContact.php">Contacts</a></li>
            

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CAP<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="cap.html">CAP B.Tech</li>
                    <li class="divider"></li>
                    <li><a href="cap.html">CAP MBA</a></li>
                  </ul>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">User Profiles<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="displayUserProfiles.php">View Users</li>
                      <li class="divider"></li>
                      <li><a href="user_Profiles.php">Add Users</a></li>
                    </ul>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Interaction Logs<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="IL_retrieval.php">View Logs</a></li>
                        <li class="divider"></li>
                        <li><a href="InteractionLog_form.php">Enter Log Details</a></li>   
                      </ul>
                    </li> 
                    <li><a href="search.php">Search</a></li>
                  </li>
                  <li><a href="#">Logout</a></li>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
        <!--************************* Navbar ends here *************************-->      
        <br>
        <br>
        <br>
        <br>
		<?php
		$cName=$_GET['cName'];
		echo '<div class="panel panel-primary">';
		  echo '<div class="panel-heading">';
		    echo '<h3 class="panel-title">'.$cName.'<button  type="button" class="btn btn-default btn-xs" style="float:right;top:150px;">';

		  echo'<span class="glyphicon glyphicon-pencil"></span>';
		echo'</button></h3></div>';

		$fetch_record_query1 = "SELECT * FROM offices where cName='$cName'";
      	$fetch_record = mysql_query($fetch_record_query1);
      	$record_data = mysql_fetch_array($fetch_record);

      	$address = $record_data["address"];
      	$city = $record_data["city"];
      	$state = $record_data["state"];
      	echo '<div class="panel-body">
		<p>'.$address.'<br>
		<p>'.$city.'<br>
		<p>'.$state.'<br><p></div></div>';


		$fetch_record_query2 = "SELECT * FROM contacts where cName='$cName'";
      	$fetch_record2 = mysql_query($fetch_record_query2);
      	

      	echo '<div style="width:500px">';
		echo '<div class="panel panel-primary">';
		     echo '<div class="panel-heading">';
		          echo '<h3 class="panel-title">Contacts</h3>';
		     echo '</div>';
		echo '</div>';
		echo '</div>';
		

		while($record_data = mysql_fetch_array($fetch_record2))
      	{
      	$contactName=$record_data["contactName"];
      	$officeName=$record_data["officeName"];
      	$designation=$record_data["designation"];
      	$mobileNumber=$record_data["mobileNumber"];
      	$email=$record_data["email"];

      	echo '<tr><td>';
		echo '<div style="width:500px">';
		echo '<div class="panel panel-primary">';
			echo '<div class="panel-heading">';
			echo '<h3 class="panel-title">'.$contactName.'<button  type="button" class="btn btn-default btn-xs" style="float:right;">';

			 
		  
		echo '</button></h3>';
		  echo '</div>';
		  echo '<div class="panel-body">
		   '.$designation.'<br>
		   '.$email.'<br>
		   '.$mobileNumber.'<br>
		   '.$city.'
		  	</div>';
		echo '</div>';
		echo '</div>';
		echo '</tr></td>';
		}

		// $record_data = mysql_fetch_array($fetch_record2);
      	
  //     	$contactName=$record_data["contactName"];
  //     	$officeName=$record_data["officeName"];
  //     	$designation=$record_data["designation"];
  //     	$mobileNumber=$record_data["mobileNumber"];
  //     	$email=$record_data["email"];

  //     	echo '<tr><td>';
		// echo '<div style="width:500px">';
		// echo '<div class="panel panel-primary">';
		// 	echo '<div class="panel-heading">';
		// 	echo '<h3 class="panel-title">'.$contactName.'<button  type="button" class="btn btn-default btn-xs" style="float:right;">';

			 
		  
		// echo '</button></h3>';
		//   echo '</div>';
		//   echo '<div class="panel-body">
		//    '.$designation.'<br>
		//    '.$email.'<br>
		//    '.$mobileNumber.'<br>
		//    '.$city.'
		//   	</div>';
		// echo '</div>';
		// echo '</div>';
		// echo '</tr></td>';
		
		?>
</div>
</div></body>
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
		<title>CIS User Profiles</title>
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
        				</div>
        				<!-- /.navbar-collapse -->
      				</div>
      				<!-- /.container-fluid -->
    			</nav>
				<!--************************* Navbar ends here *************************-->     
				<br>
				<br>
				<br>
				<h2>CIS Users</h2>
				<br>
   	 			<?php
    				$fetch_record_query = "SELECT * from userprofiles"; 
					$fetch_record = mysql_query($fetch_record_query);
					
					while($record_data = mysql_fetch_array($fetch_record))
					{
						$upName = $record_data["upName"];
						$upUserName = $record_data["upUserName"];
						$upPassword = $record_data["upPassword"];
						$privileges = $record_data["privileges"];

						echo'<div class="panel panel-primary">';
  						echo'<div class="panel-heading">'.$upName. '</div>';
  						echo'<div class="panel-body">';
						
						    print "<br>";
						    print "User Name: ".$upUserName;
						    print "<br>";
						    print "Password: ".$upPassword;
						    print "<br>";
						    print "Privilege: ".$privileges;
						  echo"</div>";
						echo"</div>";
					}
				?>	
			</div>
		</div>
	</body>
</html>
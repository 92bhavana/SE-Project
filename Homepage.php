<?php

session_start();
mysql_connect("localhost","root","") or die (mysql_error ());

		mysql_select_db("cis") or die(mysql_error());
?>


<!DOCTYPE html>
<html>
<head>

	<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="search.css">
    <style type="text/css">a {text-decoration: none} </style>
	<title>CIS Homepage </title>
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
            
            <li><a href="Homepage.php">Home</a></li></li>
            <li><a href="listOFCompanies.php">Company</a></li></li>
            <li><a href="addContact.php">Contacts</a></li></li>
            

            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">CAP<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="cap.html">CAP B.Tech</li>
            <li class="divider"></li>
            <li><a href="capMba.html">CAP MBA</a></li>
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
            <li><a href="InteractionLog_form.php">Enter Log Details</a></li></ul>
   
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="capDetails.html">Cap Details</a></li>
            <li class="divider"></li>
            <li><a href="capMbaDetails.html">Cap MBA</a></li>
            </ul>
        </li> 
            
            <li><a href="#">Logout</a></li>
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
		<h2>Companies</h2>
		<p2><a href="listOfCompanies.php"style="text-decoration: none">View the list of companies here</a></p2>
		<br>
		<h2>Interaction Logs</h2>
		<p2><a href="IL_retrieval.php"style="text-decoration: none">View the recent corporate interactions here</a></p2><br>
		<p2><a href="InteractionLog_form.php"style="text-decoration: none">Record an interaction log</a></p2>
		<br>
		<h2>User Profiles</h2>
		<p2><a href="displayUserProfiles.php"style="text-decoration: none">View the list of users here</a></p2><br>
		<p2><a href="user_Profiles.php"style="text-decoration: none">Add a user</a></p2>
		<br>
		<h2>Corporate Action Plan</h2>
		<p2><a href="/CIS/cap.html"style="text-decoration: none">View the E-Format of the CAP here</a></p2>
	</div>
</body>
</html> 
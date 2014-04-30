<?php
session_start();
?>

<html>
<head>

	<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

	<title>CIS Add Contact</title>
</head>
<body>
	<div class="container-fluid">
	<div class="container">

		<!--************************* Navbar starts here *************************-->
		<nav class="navbar navbar-default" role="navigation">
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
				<p class="navbar-text">Signed in as *Query name from Database*</p>
					<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Logout</a></li></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!--************************* Navbar ends here *************************-->
	<h1>Add Contact</h1>
	</div>
	<div class="col-md-4 col-md-offset-4">
		<form role="form" method="get" action="addContact_form.php">
		<?php
	
		if(isset($_SESSION["data_error"]))
			{echo $_SESSION["data_error"]; unset($_SESSION["data_error"]);}
		?>
		  <div class="form-group">
		    <label for="Company Name">Contact Name</label>
		    <input type="Name" class="form-control" name="contactName" placeholder="Enter Contact Name">
		  </div>
		  <div class="form-group">
		    <label for="Company Name">Company Name</label>
		    <input type="Name" class="form-control" name="cName" placeholder="Enter Company Name">
		  </div>
		  <div class="form-group">
		    <label for="Company Name">Branch Name</label>
		    <input type="Name" class="form-control" name="officeName" placeholder="Enter Branch Name">
		  </div>
		  <div class="form-group">
		    <label for="Company Name">Designation</label>
		    <input type="Name" class="form-control" name="designation" placeholder="Enter Contact Designation">
		  </div>
		  <div class="form-group">
		    <label for="Company Name">Mobile Number</label>
		    <input type="Name" class="form-control" name="mobileNumber" placeholder="Enter Contact Number">
		  </div>
		  <div class="form-group">
		    <label for="Company Name">email</label>
		    <input type="Name" class="form-control" name="email" placeholder="Enter Contact email">
		  </div>
		  <center><button type="submit" value="Submit" class="btn btn-primary">Submit</button></center>
		</form>
	</div>
</body>
</html>

<!-- contactName
cName
officeName
designation
mobileNumber
email -->
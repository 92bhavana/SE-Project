<!DOCTYPE html>
<html>
	<head>

	<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="search.css">
    <style type="text/css">a {text-decoration: none} </style>
	<title>Add Company </title>
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

				<h1>Add Company</h1>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<form action="/CIS/addCompanyDetails.php" method="post" class="form-horizontal" role="form" 	autocomplete="on">
		  		<div class="form-group">
		    		<label for="Company Name">Company Name</label>
		    		<input type="Name" class="form-control" name="cname" placeholder="Enter company Name" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Tags">Tags</label>
		    		<input type="Name" class="form-control" name="tname" placeholder="Enter Tags seperated by semi-colons" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Office Name">Office Name</label>
		    		<input type="Name" class="form-control" name="oname" placeholder="Enter office Name" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Description">Company Description</label>
		    		<input type="Text" class="form-control" name="cdesc" placeholder="Enter company Description" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="City">City</label>
		    		<input type="Text" class="form-control" name="city" placeholder="Enter city" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="State">State</label>
		    		<input type="Text" class="form-control" name="state" placeholder="Enter state" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Address">Address</label>
		    		<input type="Text" class="form-control" name="addr" placeholder="Enter address" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Location">Location</label>
		    		<input type="Text" class="form-control" name="loc" placeholder="Enter location" required>
		  		</div>  

		  		<div class="form-group">
		    		<label for="Company Contact Person">Contact Person</label>
		    		<input type="Name" class="form-control" name="name" placeholder="Contact Name" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Contact Designation">Designation</label>
		    		<input type="Name" class="form-control" name="desig" placeholder="Contact Designation " required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Company Contact">Contact Number</label>
		    		<input type="Name" class="form-control" name="num" placeholder="Contact Number" required>
		  		</div>

		  		<div class="form-group">
		    		<label for="Contact e-mail">e-Mail</label>
		    		<input type="email" class="form-control" name="email" placeholder="Contact Email" required>
		  		</div>

		  		<label for="Location">Intake from</label>
					<div class="radio">
						<label>
							<input type="checkbox" name="intake" id="option1" value="Y">
							B.Tech
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="checkbox" name="intake" id="option2" value="Y">
								M.Tech
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="checkbox" name="intake" id="option3" value="Y">
							MBA
						</label>
					</div>
		  		<center><button type="submit" class="btn btn-primary">Submit</button></center>
				</form>
			</div>
		</body>
	</html>
<!DOCTYPE html>
<html>
<head>

	<link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

	<title>User Profiles</title>
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
            <li><a href="search.php">Search</a></li></li>
            <li><a href="#">Logout</a></li></li>
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
		<h1>User Profile</h1>
		<div class="col-md-6 col-md-offset-2">
		<form action="/CIS/userProfiles.php" method="post" autocomplete="on" class="form-horizontal" role="form">
		  	<div class="form-group">
		    	<label for="name" class="col-sm-3 control-label">Staff/User Name</label>
		    	<div class="col-sm-9">
		    		<input type="text" class="form-control" name ="name" placeholder="Name of the User" required>
		   		</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="username" class="col-sm-3 control-label">Email-Id</label>
		    	<div class="col-sm-9">
		      		<input type="text" class="form-control" name="email" placeholder="Enter new user's email-id" required>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label for="password" class="col-sm-3 control-label">Password</label>
		    	<div class="col-sm-9">
		      		<input type="text" class="form-control" name="password" placeholder="Assign password to new user" required>
		    	</div>
		  	</div>
		  	<div class="form-group">
		  		<label for="privilege" class="col-sm-3 control-label">Privilege</label>
		    	<div class="col-sm-9">
		  		<label class="radio-inline">
					<input type="radio" name="privilege" id="admin" value="admin" required> Admin
				</label>
				<label class="radio-inline">
					<input type="radio" name="privilege" id="staff" value="staff" required> Staff
				</label>
				<label class="radio-inline">
					<input type="radio" name="privilege" id="visitor" value="visitor" > Visitor
				</label>
		  	</div><br><br>
		 	<div class="form-group">
		    	<div class="col-sm-offset-3 col-sm-10">
		      		<button type="submit" name="submit" class="btn btn-default">Add User</button>
		    	</div>
		  	</div>
		</form>
	</div>
	</div>
</body>
</html>
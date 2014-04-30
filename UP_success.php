<?php
  mysql_connect("localhost","root","") or die (mysql_error ());

  mysql_select_db("cis") or die(mysql_error());

?>

!DOCTYPE html>
<html>
  <head>

    <link href="http://netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="search.css">
      <style type="text/css">a {text-decoration: none} </style>
    <title>User Profile</title>
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
        <div>
          <div id="size" class="panel panel-success">
            <div class="panel-heading">Success!</div>
            <div class="panel-body">
              User Profile recorded successfully!
            </div>
          </div>
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            View Record
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">User Profile</h4>
                </div>
                <div class="modal-body">
                  <?php
                    $data = mysql_query('Select upName, upUserName, upPassword, privileges from userprofiles ORDER BY upID desc limit 1')
                    or die(mysql_error()); 
                    $info = mysql_fetch_array( $data ); 
                    Print "<b>Staff Name:</b> ".$info['upName'] . " <br>"; 
                    Print "<b>Username:</b> ".$info['upUserName'] . " <br>"; 
                    Print "<b>Password:</b> ".$info['upPassword'] . " <br>"; 
                    Print "<b>Privilege:</b> ".$info['privileges'] . " <br>"; 
                  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

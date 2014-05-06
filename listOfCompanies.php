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

        <h1>Companies <a href="/CIS/Add_Company_Details.php" class="btn btn-primary" role="button" style="float:right;top:150px">Add Company</a>  
          <a href="/CIS/addContact.php" class="btn btn-primary" role="button" style="float:right;top:150px">Add Contact</a>
        </h1>
      </div>
        <br>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">

          <?php

          $fetch_record_query = "SELECT * from company";
        $fetch_record = mysql_query($fetch_record_query);
        echo "<p><h3>Records</h3></p>";


        echo '<table class="table table-hover"';
          echo '<tr><td>Company Name</td><td>Description</td><td>#tags</td><tr>';
    
    while($record_data = mysql_fetch_array($fetch_record))
    {
    $cName = $record_data["cName"];
    $cDescription = $record_data["cDescription"];
    $tags = $record_data["tags"];
    
    
   echo '<tr><td><form method="get" action="companyDetails.php"><input type="hidden" name="cName" value="'.$cName.'"><button type="submit" class="btn btn-primary" role="button">'.$cName.'</button></form></td><td>'.$cDescription.'</td><td>'.$tags.'</td><tr>';
    
    }
    echo "</table>";

    ?>
        </div>
    </div>  
</body>
</html


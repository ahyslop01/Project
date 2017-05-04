<head>

<?php
include 'nav.php';
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<html>
<!--The above head includes css and required bootstrap links
 	This page is the index page, I intend for it to show exactly what this website is about as soon as a user first joins and can easily login/register-->
  <body>
  <!--This wrapper is used in all of the pages-->
   <div id="wrapper">
   <!--content left and right, left is for the description and right is for login/register both of these elements are done using bootstrap-->
   <div id="contentleft">
   	
   	<div class="jumbotron">
  <h1>This is Project</h1>
  <p>Project is a social colaborative space to find others to work on projects together. Are you a web developer but in need of a designer? project is great for that. Are you a game developer in need of a photoshop genius? project is great for that</p>
  
</div>
  
 
   </div>
   <div id="contentRight">
    <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
      Login     
      </h4>
    </div>
    <div id="collapseOne1" class="accordion-body collapse in">
      <div class="panel-body">
      <!--go to login php to see how this script works, one this script is done it will go to the main.php page-->
      <form class="" action="login.php" method="post">
      <input type="text" class="form-control" name="uid" placeholder="UserName"><br>
      <input type="password" class="form-control" name="pwd" placeholder="Password"><br>
      <button type="submit" class="form-control" name="button">Log in</button>
    </form>
      
      </div>
    </div>
  </div>
    
    	  
	  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne2">
      Register</a>
      
      </h4>
    </div>
    <div id="collapseOne2" class="accordion-body collapse">
      <div class="panel-body">
      <!--same as previous, but instead will take us back to index.php so user can login. Validation still needs to be compelted for the logins-->
      <form action="signup.php" method="post"><br>
  <input type="text" class="form-control" name="first" placeholder="FirstName"><br>
  <input type="text" class="form-control" name="last" placeholder="LastName"><br>
  <input type="text" class="form-control" name="uid" placeholder="UserName"><br>
  <input type="password" class="form-control" name="pwd" placeholder="Password"><br>
  <button type="submit" class="form-control" name="button">Register</button>
</form>
      
      </div>
    </div>
  </div>

	  </div>
	  </div>
  </body>
  </html>
<head>
<?php
include 'nav.php';
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<html>

  <body>
   <div id="wrapper">
   <div id="contentleft">
   	<h1> About Project</h1>
   </div>
   <div id="contentRight">
    <h1> Login </h1>
    <form class="" action="login.php" method="post">
      <input type="text" class="form-control" name="uid" placeholder="UserName"><br>
      <input type="password" class="form-control" name="pwd" placeholder="Password"><br>
      <button type="submit" class="form-control" name="button">Log in</button>
    </form>
    <br>
    <br>
    <h1> Register </h1>
<form action="signup.php" method="post"><br>
  <input type="text" class="form-control" name="first" placeholder="FirstName"><br>
  <input type="text" class="form-control" name="last" placeholder="LastName"><br>
  <input type="text" class="form-control" name="uid" placeholder="UserName"><br>
  <input type="password" class="form-control" name="pwd" placeholder="Password"><br>
  <button type="submit" class="form-control" name="button">SIGN UP</button>
</form>

	  </div>
	  </div>
  </body>
  </html>
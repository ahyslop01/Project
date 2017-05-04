<head>
<?php
include 'nav2.php';

?>
<link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<html>


<body>


<div id="wrapper">
  
 <?php
	include 'accsidebar.php'
   ?>
  
  <div id="content">
  	<div id="container">
  	<h1>My Projects</h1>
     <a class="nav-tabs" href="create.php"><h3>New</h3></a>
  	<?php
	include 'accfeed.php'
		
		
   ?>
  	<h1>Applied</h1>
     
  	<?php
	include 'applied.php'
		
		
   ?>
  	
  </div>
  
  
  
  
</div>
   

</body>
</html>
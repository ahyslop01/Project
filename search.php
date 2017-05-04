<head>
<?php
include 'nav2.php';
include 'connection.php';
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<html>
<body>
<div id="wrapper">  
  
 
  <?php
	include 'sidebar.php'
   ?>
	
  <div id="container">
  <div id="content">
  	<h1> Search </h1>
	
	<form action="searcher.php" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>
	
	  </div>
</div>
</body>
</html>
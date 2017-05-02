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
	include 'sidebar.php'
   ?>
  
  <div id="content">
  	<h1> Create</h1>
  	
  	<form action="creater.php" method="post"><br>
  <input type="text" class="form-control" name="title" placeholder="Project Title"><br>
  <input type="text" class="form-control" name="Requirements" placeholder="Requirements"><br>
  <input type="textarea" class="form-control" name="description" placeholder="Description" ><br>
  <button type="submit" class="form-control" name="button">Create</button>
</form>
	
  </div>
</div>
   

</body>
</html>
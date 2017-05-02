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
	include 'accsidebar.php';
		$id = $_GET['id']	;	
   ?>
  
  <div id="content">
  	<h1> Edit</h1>
  	
  	<form action="editer.php" method="post"><br>
  <input type="text" class="form-control" name="title" placeholder="Project Title"><br>
  <input type="text" class="form-control" name="Requirements" placeholder="Requirements"><br>
  <input type="textarea" class="form-control" name="description" placeholder="Description" ><br>
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <button type="submit" class="form-control" name="button">Edit</button>
  
</form>
	
  </div>
</div>
   

</body>
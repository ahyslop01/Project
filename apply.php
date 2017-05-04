<head>
<?php
include 'nav2.php';
include 'connection.php';
?>

</head>
<html>
<body>
<div id="wrapper">  
 
 
  <?php
	include 'sidebar.php'
   ?>
	
  <div id="content">
  	<div id="container">
  	<h1>Applying For</h1>
  	
  	<table>

	<tr><th>Title</th><th>Requirements</th><th>description</th></tr>
  	
	<?php
	session_start();
	
	$id = $_SESSION['id'];
	$name = $_SESSION['name'];
	
	$sqlget = "SELECT * FROM project WHERE id = '$id'";

	$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
	
	

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
					echo '<tr><td>';
					echo $row['title'];
					echo '</td><td>';
					echo $row['Requirements'];
					echo '</td><td>';
					echo $row['description'];
					echo '</td><tr>';
	}
	echo "</table>";
   ?>
	  </div>
</div>
</body>
</html>
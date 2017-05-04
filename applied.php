<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include 'connection.php';

//get data

session_start();
		$name = $_SESSION['username'];

//get data
$sqlget = "SELECT * FROM applied WHERE userid = '$name'";

$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		

echo "<table>";

echo "<tr><th>Title</th><th>Requirements</th></tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		$projectid = $row['projectid'];
		$sqlget2 = "SELECT * FROM project WHERE id = '$projectid'";
			$sqldata2 = mysqli_query($conn, $sqlget2) or die("error getting data");
				while ($row2 = mysqli_fetch_array($sqldata2, MYSQLI_ASSOC)) {
						
					echo '<tr><td>';
					echo $row2['title'];
					echo '</td><td>';
					echo $row2['description'];
					echo '</td><tr>';
					
				}
		
	}

   ?>
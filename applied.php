<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include 'connection.php';


//get data

session_start();
		$name = $_SESSION['username'];
		
		 $sqlget = "SELECT * FROM applied WHERE userid = '$name'";


 

$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		

echo "<table>";

echo "<tr><th>Userid</th><th>projectid</th><th>Description</th></tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		

		echo '<tr><td>';
		echo $row['userid'];
		echo '</td><td>';
		echo $row['projectid'];
		echo '</td><td>';
		echo $row['description'];
		echo '</td><tr>';
		
		
	}

echo "</table>";
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include 'connection.php';


//get data

session_start();
		$name = $_SESSION['username'];
		
		$sqlget = "SELECT * FROM project WHERE account = '$name'";



$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		

echo "<table>";

echo "<tr><th>Title</th><th>Requirements</th><th>Description</th><th>Action</th><th>Edit</th></tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		echo '<tr><td>';
		echo $row['title'];
		echo '</td><td>';
		echo $row['Requirements'];
		echo '</td><td>';
		echo $row['description'];
		echo '</td><td>';
		echo '<a href="deleterecord.php?id=' . $row['id'] . '">Delete</a>';
		echo '</td><td>';
		echo '<a href="editrecord.php?id=' . $row['id'] . '">Edit</a>';
		echo '</td><tr>';
		
		
	}

echo "</table>";
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include 'connection.php';

session_start();
		$name = $_SESSION['username'];
echo $name;
//get data
$sqlget = "SELECT * FROM project";

$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		

echo "<table>";

echo "<tr><th>Title</th><th>Requirements</th><th>Description</th><th>Action</th></tr>";

	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		echo '<tr><td>';
		echo $row['title'];
		echo '</td><td>';
		echo $row['Requirements'];
		echo '</td><td>';
		echo $row['description'];
		echo '</td><td>';
		echo '<a href="apply.php?id=' . $row['id'] . '">Apply</a>';
		echo '</td><td>';
		echo '<input type="hidden" name="name" value="<?php echo $name; ?>" />';
		echo '</td><tr>';
		
	}



echo "</table>";
?>



<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include 'connection.php';

session_start();
		$name = $_SESSION['username'];

//get data
$sqlget = "SELECT * FROM project";

$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		


	while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		
		
		echo '<div id="feedcontainer">';
		echo '<div class="media">';
    	echo '<a class="pull-left" href="#"><img class="media-object" src="images/MediaObj_Placeholder.png" alt="Generic placeholder image"></a>';
    	echo '<div class="media-body">';
      	echo '<h4 class="media-heading">'.$row['title'].'</h4>';
      	echo '<p>'.$row['description'].'</p>';
		echo '<p>'.$row['Requirements'].'</p>';
		echo '<a href="applyscript.php?id=' . $row['id'] . '">Apply</a>';
		echo '<input type="hidden" name="name" value="<?php echo $name; ?>" />';
      	echo '</div>';
	  	echo '</div>';
		echo '</div>';
	}

?>



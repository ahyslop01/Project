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
<?php
$search_value=$_GET["query"];

include 'connection.php';

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from project where title like '%$search_value%' or description like '%$search_value%'";

        $res=$conn->query($sql);
	echo "<table>";

echo "<tr><th>Title</th><th>Requirements</th><th>Description</th></tr>";
        while($row=$res->fetch_assoc()){
            		echo '<div id="feedcontainer">';
		echo '<div class="media">';
    	echo '<a class="pull-left" href="#"><img class="media-object" src="images/MediaObj_Placeholder.png" alt="Generic placeholder image"></a>';
    	echo '<div class="media-body">';
      	echo '<h4 class="media-heading">'.$row['title'].'</h4>';
      	echo '<p>'.$row['description'].'</p>';
		echo '<p>'.$row['Requirements'].'</p>';
		echo '<a href="apply.php?id=' . $row['id'] . '">Apply</a>';
		echo '<input type="hidden" name="name" value="<?php echo $name; ?>" />';
      	echo '</div>';
	  	echo '</div>';
		echo '</div>';


            }       
echo "</table>";
	
        }
header ("Location: search.php");

?>


</div>
	</div>
</body>
</html>
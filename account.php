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
	include 'accsidebar.php';
	?>
	<div id="content">
	<div id="container">
		<h1>Account Details</h1>
		<?php
		session_start();
		$name = $_SESSION['username'];
		
		$sqlget = "SELECT * FROM user WHERE uid = '$name'";
		
		
		
		$sqldata = mysqli_query($conn, $sqlget) or die("error getting data");
		
	
		
		while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
		
			
			echo '<table>';
			
			echo '<tr><td>';
			echo 'Name';
			echo '</td><td>';
			echo $row['first'];
			echo '</td></tr>';
			echo '<tr><td>';
			echo 'Surname';
			echo '</td><td>';
			echo $row['last'];
			echo '</td></tr>';
			echo '<tr><td>';
			echo 'Username';
			echo '</td><td>';
			echo $row['uid'];
			echo '<tr><td>';
			echo 'Email';
			echo '</td><td>';
			echo $row['uid'];
			echo '<tr><td>';
			echo 'Password';
			echo '</td><td>';
			echo '<a href="">Reset Password</a>';
			echo '</td></tr>';
			
			
		echo '</table>';
		
	}
		
		
			?>
	</div>
</div>

</body>
</html>
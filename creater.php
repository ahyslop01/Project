<?php
session_start();
$name = $_SESSION['username'];

include 'connection.php';

 $title = $_POST ['title'];
 $Requirements = $_POST ['Requirements'];
 $description = $_POST ['description'];


 $query   = "INSERT INTO project (title, Requirements, description, account)
 VALUES('$title', '$Requirements', '$description', '$name')";
 $success = $conn->query($query);




if (!$success) {
     die("Couldn't enter data: ".$conn->error);

 }
	$url = 'http://project.ahyslop.co.uk/create.php';
   echo '<script>window.location = "'.$url.'";</script>';

?>
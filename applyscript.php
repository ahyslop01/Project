<?php

include 'connection.php';
session_start();
		$name = $_SESSION['username'];


$id = $_GET['id'];



$query   = "INSERT INTO applied (userid, projectid)
 VALUES('$name', '$id')";
 $success = $conn->query($query);

$_SESSION['id']= $id;
$_SESSION['name']= $name;



	
	


$url = 'http://project.ahyslop.co.uk/apply.php';
echo '<script>window.location = "'.$url.'";</script>';




?>
<?php

include 'connection.php';
session_start();
		$name = $_SESSION['username'];


$id = $_GET['id'];



$query   = "INSERT INTO applied (userid, projectid)
 VALUES('$name', '$id')";
 $success = $conn->query($query);

$url = 'http://project.ahyslop.co.uk/Projects.php';
   echo '<script>window.location = "'.$url.'";</script>';



?>
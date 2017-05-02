<?php

 $dbhost = "db667916466.db.1and1.com";
 $dbuser = "dbo667916466";
 $dbpass = "ahyslop101";
 $dbname = "db667916466";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if (!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

?>

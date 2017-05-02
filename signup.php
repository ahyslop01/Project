<?php


include 'connection.php';

 $first = $_POST ['first'];
 $last = $_POST ['last'];
 $uid = $_POST ['uid'];
 $pwd = $_POST ['pwd'];
 $query   = "INSERT INTO user (first, last, uid, pwd)
 VALUES('$first', '$last', '$uid', '$pwd')";
 $success = $conn->query($query);

 if (!$success) {
     die("Couldn't enter data: ".$conn->error);

 }

   header ("Location: index.php");

?>


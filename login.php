<?php

session_start();

include 'connection.php';


 $uid = $_POST ['uid'];
 $pwd = $_POST ['pwd'];
 $first = $_POST ['first'];
 $last = $_POST ['last'];

$_SESSION['username']= $uid; 



 $sql   = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
  $result = $conn->query($sql);

 if (!$row = mysqli_fetch_assoc($result)) {
   echo "Your username or password is incorrect, please return and try again";

  }else{
      header ("Location: Projects.php");
      
 }



?>
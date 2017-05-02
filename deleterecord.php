<?php

include 'connection.php';


$id = $_GET['id'];



   
   if(!mysqli_query($conn, "DELETE FROM project WHERE id = $id")) {
     echo mysqli_error($conn);
   } 

      header ("Location: myprojects.php");
   





?>
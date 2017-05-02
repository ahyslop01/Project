<?php

include 'connection.php';


$id = $_POST['id'];



 $title = $_POST ['title'];
 $Requirements = $_POST ['Requirements'];
 $description = $_POST ['description'];


 

   if(!mysqli_query($conn, "UPDATE project SET title = '$title', Requirements= '$Requirements' , description = '$description' WHERE id= $id")) {
     echo mysqli_error($conn);
   } 

      




	$url = 'http://project.ahyslop.co.uk/myprojects.php';
   echo '<script>window.location = "'.$url.'";</script>';

?>
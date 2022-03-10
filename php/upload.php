<?php
  // session_start();

  $file_name =  $_FILES['file']['name']; //getting file name
  $tmp_name = $_FILES['file']['tmp_name']; //getting temp_name of file
  $file_up_name ="upload.jpeg"; //making file name dynamic by adding time before file name
  move_uploaded_file($tmp_name, "../luxand/haystack/".$file_up_name); //moving file to the specified folder with dynamic name
  
  // $_SESSION["foto"] = $file_up_name;

  header("location: ../luxand/identification.php", true, 301);
?>

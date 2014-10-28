<?php
 require_once(__DIR__ . ". . /model / database.php");// it tells the computer where the file directory is at in the webpage
  
  $connection = new mysqli($host, $username, $password);//tells where the database is and connects it
  
  if($connection->connection_error) {//tells wat to do if there is an error conecting to database
      die("Error: . $connection->connect_error");//to correct the conection error to database
      }
  else {// tells wat to do if there is an error in the code
      echo "Success" . $connection->host_info;
  }

$connection->close();

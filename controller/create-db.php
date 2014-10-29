<?php
 require_once(__DIR__ . ". . /model / database.php");// it tells the computer where the file directory is at in the webpage
  
  $connection = new mysqli($host, $username, $password);//tells where the database is and connects it
  
  if($connection->connection_error) {//tells wat to do if there is an error conecting to database
      die("Error: . $connection->connect_error");//to correct the conection error to database
      }
  
  $exists = $connection->select_db($database);
  
  if(!$exists) {
      $query = $connection->query("CREATE DATABASE $datbase");
      
      if($query) {
         echo "Succesfully created database" . $database;
      }
  }
  else{
      echo "Database already exists.";
  }
  
  
$connection->close();

<?php
 require_once(__DIR__ . "/../model/database.php");// it tells the computer where the file directory is at in the webpage
  
  $connection = new mysqli($host, $username, $password);//tells where the database is and connects it
  
  if($connection->connect_error) {//tells wat to do if there is an error conecting to database
      die("<p>Error: " . $connection->connect_error . "</p>");//to correct the conection error to database
      }
  
  $exists = $connection->select_db($database);//selects correct database
  
  if(!$exists) {
      $query = $connection->query("CREATE DATABASE $database");//tells to create database
      
      if($query) {
         echo "<p>Succesfully created database: " . $database . "/p>";//it says wat to do if database is created succesfully
      }
  }
  else{
      echo "<p>Database already exists.</p>";
  }
  
  $query = $connection->query("CREATE TABLE posts ("//table to posts things on blog
          . "id int (11) NOT NULL AUTO_INCREMENT,"//gives blog unique id
          . "title varchar (255) NOT NULL,"//for blogs title cannot be blank
          . "post text NOT NULL,"//for the actuall blog posts cannot be blank
          . "PRIMARY KEY (id))");//tells the primary keys name is id 
  
  if($query) {
      echo "<p>succesfully created table: posts</p>";
  }
  else{
      echo "<p>$connection->error</p>";
  }
  
$connection->close();

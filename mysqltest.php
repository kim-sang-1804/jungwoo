<?php
  $user = "root";
  $pass = "1234";
  $host = "localhost";
  $dbdb = "mysql";
    
  $conn = new mysqli($host, $user, $pass, $dbdb);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  echo "It works, Connected successfully";

?>
<?php
  // $user = "root";
  // $pass = "1234";
  // $host = "localhost";
  // $dbdb = "jungwoo";
    
  // $conn = new mysqli($host, $user, $pass, $dbdb);
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);    
  // }

  // error_reporting( E_ALL );
  // ini_set( "display_errors", 1 );
  try{
    $option = array(
      PDO::MYSQL_ATTR_FOUND_ROWS => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $host = 'localhost';
    $user = 'root';
    $pw   = '1234';
    $dbName = 'jungwoo';
    $connect = new PDO("mysql:host=$host; dbname=$dbName", $user, $pw, $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
  } catch(Exception $e) {
    echo $e->getMessage();
  }

  ini_set("display_errors", 1);
  @session_start();

  $data = [];
  $filter_sql = '';
  $except = [];
  $page = 0;  
  $data_view = '';  
?>
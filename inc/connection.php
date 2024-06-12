<?php
$host = "localhost";
$database = "basic_app";
$user = "root";
$password = "";

//connecting to mysql database
$connection = mysqli_connect($host , $user ,$password, $database) or die("Database can not connect");


// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Database Connected successfully";
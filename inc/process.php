<?php 
require "connection.php";

if(isset($_POST["register"])){
    $name =  $_POST["name"];
    $email =  $_POST["email"];
    $password =  $_POST["password"];
    $encrypt_password =  md5($password);
    //check if user already exist
    $sql_check = "SELECT  * FROM   users WHERE email = '$email' ";
    $query_check =  mysqli_query($connection, $sql_check) or die("Cant check data");
      if(mysqli_num_rows($query_check) > 0){
        $error = "User already exist";
      
      }else{
  //insert data to database;
  $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$encrypt_password')";
  $query =  mysqli_query($connection, $sql) or die("Cant save data");
 $success = " User register successfully";
      }
}        
?>
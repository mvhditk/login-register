<?php
require_once("../config/loader.php");

if (isset($_POST['sign-in'])) {
    try {
      // parametrs
    
    $key=$_POST['key'];
    $password=$_POST['password'];

    //sql

    $query="SELECT * FROM `users` WHERE (username=:key OR mobile=:key OR email=:key) AND (password=:password) LIMIT 1";

    //stmt
     $stmt = $conn->prepare($query);

    //bind
    $stmt->bindValue(":key",$key);
    $stmt->bindValue("password",$password);


    //exe

    $stmt->execute();
    
    $userfound=$stmt->rowCount();
      if ($userfound) {
        header("Location:../index.php?userfound=ok");    
      }else {
        header("Location:../index.php?notuser=ok");      
      }
      
    


    } catch (PDOException $e) {
        echo "your error is :" .$e->getMessage();
    }



}
<?php
$servername="localhost";
$username="root";
$password="";
$db_name="log-in";

try {
    $conn = new PDO("mysql:host=$servername;dbname=".$db_name,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "connection ok";
} catch (PDOException $e) {
    echo "connection failed:".$e->getMessage();
}

?>
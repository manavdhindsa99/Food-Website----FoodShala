<?php
$serevername = "localhost";
$username = "root";
$password = "";
$errors = array();

try {
  $conn = new PDO("mysql:host=$serevername;dbname=foodshala",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  session_start();
  

} catch (PDOException $e) {
  echo "Connection Failed : ".$e->getMessage();
}
 ?>

<?php
include_once '../helpers/init.php';

if (isset($_POST['login'])) {
    $restaurantEmail = filter_var($_POST['restaurantEmail'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    //First hash the password
    $query = "SELECT * FROM restaurant WHERE restaurantEmail = :restaurantEmail";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':restaurantEmail', $restaurantEmail);
    $stmt->execute();
    $data = $stmt->fetch();
    $restaurantName = $data['restaurantName'];
    $ID = $data['id'];
    $password_fetched = $data['password'];
    
        if (password_verify($password,$password_fetched)) {
          $_SESSION['is_login']= true;
          $_SESSION['restaurantName'] = $restaurantName;
          $_SESSION['USER_ID'] = $ID;
          header('Location:../views/restaurantDashboard.php');
       } else {
          $_SESSION["message"] = "Wrong Email or Password.";
          $_SESSION["msg_type"] = "danger";
          header('Location:../views/loginRestaurant.php');
       }
       
  }

//logout
  if (isset($_POST['logout'])){
    session_destroy();
    header('Location:../views/loginRestaurant.php');
  }

?>
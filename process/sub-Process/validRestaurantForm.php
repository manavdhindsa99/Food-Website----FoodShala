<?php
  //Name
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['restaurantName'])) {
    $_SESSION["message"] = "Only letters and white space allowed RestaurantName ";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/addRestaurant.php');
  }else{
    $restaurantName = filter_var($_POST['restaurantName'], FILTER_SANITIZE_STRING);
  }
  //Number
  if(preg_match('/^[0-9]{10}+$/', $_POST['restaurantNumber'])) {
    $restaurantNumber =$_POST['restaurantNumber'];        
  }else{
    $_SESSION["message"] = "Invalid Mobile Number";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/addRestaurant.php');
  }
  //Email
  $restaurantEmail = filter_var($_POST['restaurantEmail'], FILTER_SANITIZE_EMAIL);
  //who created account
  $createdBy = filter_var($_POST['createdBy'], FILTER_SANITIZE_STRING);

  //City
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['restaurantCity'])) {
    $_SESSION["message"] = "Only letters and white space allowed in City Name";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/addRestaurant.php');
  }else{
    $restaurantCity = filter_var($_POST['restaurantCity'], FILTER_SANITIZE_STRING);
  }

  //password
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
?>
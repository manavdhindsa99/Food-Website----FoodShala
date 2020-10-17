<?php 
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['foodItemName'])) {
    $_SESSION["message"] = "Only letters and white space allowed in Food Item Name ";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/restaurantDashboard.php');
  }else{
    $foodItemName = filter_var($_POST['foodItemName'], FILTER_SANITIZE_STRING);
  }

  if (!filter_var($_POST['foodItemPrice'], FILTER_VALIDATE_INT)) {
    $_SESSION["message"] = "Only enter Numbers";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/restaurantDashboard.php');
  }else{
    $foodItemPrice = $_POST['foodItemPrice'];
  }
  $foodType = $_POST['foodType'];
  $USER_ID = $_POST['restaurantID'];
  $restaurantName = $_POST['restaurantName'];
?>
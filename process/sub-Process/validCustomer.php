<?php
  //Name
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['customerName'])) {
    $_SESSION["message"] = "Only letters and white space allowed CustomerName ";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/customerRegistration.php');
  }else{
    $customerName = filter_var($_POST['customerName'], FILTER_SANITIZE_STRING);
  }
  //Number
  if(preg_match('/^[0-9]{10}+$/', $_POST['customerNumber'])) {
    $customerNumber =$_POST['customerNumber'];        
  }else{
    $_SESSION["message"] = "Invalid Mobile Number";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/customerRegistration.php');
  }
  //Email
  $customerEmail = filter_var($_POST['customerEmail'], FILTER_SANITIZE_EMAIL);
  $foodPreference = filter_var($_POST['foodPreference'], FILTER_SANITIZE_STRING);
  
  //City
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['customerCity'])) {
    $_SESSION["message"] = "Only letters and white space allowed in City Name";
    $_SESSION["msg_type"] = "danger";
    header('Location:../views/customerRegistration.php');
  }else{
    $customerCity = filter_var($_POST['customerCity'], FILTER_SANITIZE_STRING);
  }

  //password
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
?>
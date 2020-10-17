<?php
include_once '../helpers/init.php';

if (isset($_POST['login'])) {
    $customerEmail = filter_var($_POST['customerEmail'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    //First hash the password
    $query = "SELECT * FROM customers WHERE customerEmail = :customerEmail";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':customerEmail', $customerEmail);
    $stmt->execute();
    $data = $stmt->fetch();
    $customerEmail = $data['customerEmail'];
    $customerName = $data['customerName'];
    $ID = $data['id'];
    $password_fetched = $data['password'];
    
        if (password_verify($password,$password_fetched)) {
          $_SESSION['is_login']= true;
          $_SESSION['customerEmail'] = $customerEmail;
          $_SESSION['USER_ID'] = $ID;
          header('Location:../views/viewMenu.php');
       } else {
          $_SESSION["message"] = "Wrong Email or Password.";
          $_SESSION["msg_type"] = "danger";
          header('Location:../views/customerLogin.php');
       }
       
  }

//logout
  if (isset($_POST['logout'])){
    session_destroy();
    header('Location:../views/customerLogin.php');
  }

?>
<?php
include_once '../helpers/init.php';

if (isset($_POST['register'])) {
    require 'sub-Process/validCustomer.php';
    $stmt = $conn->query("SELECT * FROM customers WHERE customerEmail='$customerEmail'");
    $stmt->execute();
    $num_rows = $stmt->fetchColumn(); 

    if ($num_rows>0) {
        
        $_SESSION["message"] = "This Email already exists.";
        $_SESSION["msg_type"] = "danger";
        header('Location:../views/customerLogin.php');

      } else {
        
        // TO REGISTER Customer
        if (count($errors) == 0) {
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);
           $stmt = $conn ->prepare("INSERT INTO customers (customerName,customerNumber,customerEmail,foodPreference,customerCity,password)
           VALUES (:customerName,:customerNumber,:customerEmail,:foodPreference,:customerCity,:password)");
           $stmt->bindParam(':customerName', $customerName);
           $stmt->bindParam(':customerNumber', $customerNumber);
           $stmt->bindParam(':customerEmail', $customerEmail);
           $stmt->bindParam(':foodPreference', $foodPreference);
           $stmt->bindParam(':customerCity', $customerCity);
           $stmt->bindParam(':password', $hashed_password);
           $stmt->execute();
           $_SESSION["message"] = "Customer is Registered.";
           $_SESSION["msg_type"] = "success";
           

        }
        header('Location:../views/customerRegistration.php');

      }

}


$conn = null;
?>
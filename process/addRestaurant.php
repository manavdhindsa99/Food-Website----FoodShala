<?php
include_once '../helpers/init.php';

if (isset($_POST['register'])) {
    require 'sub-Process/validRestaurantForm.php';
    $stmt = $conn->query("SELECT * FROM restaurant WHERE restaurantEmail='$restaurantEmail'");
    $stmt->execute();
    $num_rows = $stmt->fetchColumn(); 

    if ($num_rows>0) {
        
        $_SESSION["message"] = "This Email already exists.";
        $_SESSION["msg_type"] = "danger";
        header('Location:../views/addRestaurant.php');

      } else {
        
        // TO REGISTER Restaurant
        if (count($errors) == 0) {
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);
           $stmt = $conn ->prepare("INSERT INTO restaurant (restaurantName,restaurantNumber,restaurantEmail,createdBy,restaurantCity,password)
           VALUES (:restaurantName,:restaurantNumber,:restaurantEmail,:createdBy,:restaurantCity,:password)");
           $stmt->bindParam(':restaurantName', $restaurantName);
           $stmt->bindParam(':restaurantNumber', $restaurantNumber);
           $stmt->bindParam(':restaurantEmail', $restaurantEmail);
           $stmt->bindParam(':createdBy', $createdBy);
           $stmt->bindParam(':restaurantCity', $restaurantCity);
           $stmt->bindParam(':password', $hashed_password);
           $stmt->execute();
           $_SESSION["message"] = "Restaurant is Registered.";
           $_SESSION["msg_type"] = "success";

        }
        header('Location:../views/restaurantDashboard.php');

      }

}


$conn = null;
?>
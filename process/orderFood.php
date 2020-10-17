<?php
include_once '../helpers/init.php';
if (isset($_POST['orderFood'])) {

  $customer_id = $_POST['customer_id'];
  $food_id = $_POST['food_id'];
  $restaurant_id = $_POST['restaurant_id'];
  $foodItemName = $_POST['foodItemName'];
  $foodItemPrice = $_POST['foodItemPrice'];
  $foodItemQuantity = $_POST['foodItemQuantity'];
  $totalBill = $foodItemQuantity * $foodItemPrice;
  $stmt = $conn ->prepare("INSERT INTO foodorders (customer_id,food_id,restaurant_id,foodItemName,foodItemPrice,foodItemQuantity,totalBill)
      VALUES (:customer_id,:food_id,:restaurant_id,:foodItemName,:foodItemPrice,:foodItemQuantity,:totalBill)");
      $stmt->bindParam(':customer_id', $customer_id);
      $stmt->bindParam(':food_id', $food_id);
      $stmt->bindParam(':restaurant_id', $restaurant_id);
      $stmt->bindParam(':foodItemName', $foodItemName);
      $stmt->bindParam(':foodItemPrice',$foodItemPrice);
      $stmt->bindParam(':foodItemQuantity',$foodItemQuantity);
      $stmt->bindParam(':totalBill',$totalBill);
      $stmt->execute();
      $_SESSION["message"] = "Food Orderd. Your Bill is ₹ ".$totalBill;
      $_SESSION["msg_type"] = "success";
    
      header('Location:../views/customerDashboard.php');
    

}
?>
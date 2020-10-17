<?php
include_once '../helpers/init.php';
if (isset($_POST['addFood'])) {
    require 'sub-Process/validFoodItem.php';
    $folder ="../uploads/";
    $image = $_FILES['image']['name'];
    
    $path = $folder . $image ;
    
    $target_file=$folder.basename($_FILES["image"]["name"]);
    $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
    $allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['image']['name'];
    $ext=pathinfo($filename, PATHINFO_EXTENSION); if(!in_array($ext,$allowed) )
    {
    
     $_SESSION["message"] = "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
     $_SESSION["msg_type"] = "danger";
    
     header('Location:../views/restaurantDashboard.php');
    }
    else{
      move_uploaded_file( $_FILES['image'] ['tmp_name'], $path);
      $stmt = $conn ->prepare("INSERT INTO fooditems (user_id,foodItemName,foodItemPrice,foodType,image,restaurantName)
      VALUES (:user_id,:foodItemName,:foodItemPrice,:foodType,:image,:restaurantName )");
      $stmt->bindParam(':user_id', $USER_ID);
      $stmt->bindParam(':foodItemName', $foodItemName);
      $stmt->bindParam(':foodItemPrice', $foodItemPrice);
      $stmt->bindParam(':foodType', $foodType);
      $stmt->bindParam(':image',$image);
      $stmt->bindParam(':restaurantName',$restaurantName);
      $stmt->execute();
      $_SESSION["message"] = "Food Item Added";
      $_SESSION["msg_type"] = "success";

      header('Location:../views/restaurantDashboard.php');
    }
    

}

if (isset($_POST['removeFoodItem'])) {

  $delete_id = $_POST['food_id'];
  $stmt = $conn ->prepare("DELETE FROM fooditems WHERE id = :id");
  $stmt->bindParam(':id', $delete_id);
  $stmt->execute();
  header("Location:../views/manageFoodItems.php");
}

if (isset($_POST['updateFood'])) {
  $restaurantID = $_POST['restaurantID'];
  require 'sub-Process/validFoodItem.php';
  $stmt = $conn ->prepare("UPDATE fooditems SET foodItemName = :foodItemName,foodItemPrice=:foodItemPrice,foodType=:foodType WHERE id=:id");
  $stmt->bindParam(':foodItemName', $foodItemName);
  $stmt->bindParam(':foodItemPrice', $foodItemPrice);
  $stmt->bindParam(':foodType', $foodType);
  $stmt->bindParam(':id', $restaurantID);
  $stmt->execute();
  header('Location:../views/manageFoodItems.php');

}
?>
<?php
include_once '../helpers/init.php';
include_once '../process/fetchFood.php';

if (!isset($_SESSION['customerEmail'])){
       header('Location:customerLogin.php');
}

$data = singleFoodItem($_GET['id']);
foreach ($data as $key => $value) {} 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assests/css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Playball&display=swap" rel="stylesheet">
    <title>Food Shala</title>
  </head>
  <body>
  <?php require 'sub-views/navbar.php' ?>
  <?php require 'sub-views/showError.php' ?>
    <div class="container">
    <div class="row">
        <h1 class="">Welcome <?php echo $_SESSION['customerEmail'] ?></h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
        <img src="../uploads/<?php echo $value['image'] ?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
        </div>
        <div class="col-md-6">
            <h1><?php echo $value['foodItemName'] ?></h1>
            <h3>₹ <?php echo $value['foodItemPrice'] ?></h3>
            <h3><?php echo $value['foodType'] ?></h3>
            <h3 class="lead"><?php echo $value['restaurantName'] ?></h3>
            <form class="form-inline" action="../process/orderFood.php" method="post">
                <div class="form-group">
                      <label for=""> Quantity <span class="text-danger">*</span></label>
                      <input type="number"class="form-control" min='1'  name="foodItemQuantity" value="" required placeholder="Enter Quantity">
                </div>
                <br>
                <input type="hidden" name="foodItemName" value="<?php echo $value['foodItemName'];  ?>">
                <input type="hidden" name="foodItemPrice" value="<?php echo $value['foodItemPrice'];  ?>">
                <input type="hidden" name="food_id" value="<?php echo $value['id'];  ?>">
                <input type="hidden" name="restaurant_id" value="<?php echo $value['user_id'];  ?>">
                <input type="hidden" name="customer_id" value="<?php echo $_SESSION['USER_ID'];  ?> ">
                <button class="btn btn-success btn-lg " type="submit"name="orderFood">  Get  </button>
            </form>
        </div>
    </div>                
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
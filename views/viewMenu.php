<?php 
include_once '../helpers/init.php';
include_once '../process/fetchFood.php';
$data = getAllFood();
if (isset($_SESSION['restaurantName'])){
    header('Location:restaurantDashboard.php');
}
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

    <title>FoodShala</title>
  </head>
  <body>
  <?php
   require 'sub-views/navbar.php' ;
   require 'sub-views/showError.php';
  ?> 
    
    <div class="container">
        <div class="row align-items-center">
            <h1 class="display-4">Food Menu</h1>
        </div>
        <hr>
        <div class="row">
        <?php foreach ($data as $key => $value) { ?>
            <div class="col-md-4">
            
                <div class="card" style="width: 18rem;">
                    <img src="../uploads/<?php echo $value['image']; ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="card-text"><bold><?php echo $value['foodItemName']; ?></bold></h3>
                        <div class="row">
                            <div class="col-md-6">
                            <h4 class="card-text lead text-left">₹ <?php echo $value['foodItemPrice']; ?></h4>
                            <p class="card-text text-left"><?php echo $value['foodType']; ?></p>
                            </div>
                            <div class="col-md-6"> 
                            <p class="card-text text-right"><?php echo $value['restaurantName']; ?></p>
                            <a href="orderFood.php?id=<?php echo $value['id'];?>" class="btn btn-success float-right">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        <?php }  ?>
            
                
            
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
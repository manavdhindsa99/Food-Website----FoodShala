<?php
include_once '../helpers/init.php';
include_once '../process/fetchFood.php';

if (!isset($_SESSION['restaurantName'])){
       header('Location:loginRestaurant.php');
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
    <style>
      html,body,.col-md-12,.row {
        height:100%;
      }
      .row > div {
        height:100%;
      }
    </style>
    <title>Food Shala</title>
  </head>
  <body>
  <?php require 'sub-views/navbar.php' ?>
  <?php require 'sub-views/showError.php' ?>
  <div class="col-md-12">
    <div class="row">
        <div class="col-sm-3" id="sideNav">
          <?php require 'sub-views/restaurantsideNav.php '; ?>
        </div>
        <div class="col-sm-9">
              <h1 class="lead display-4">Welcome <?php echo $_SESSION['restaurantName'] ?></h1>
              <h3 class=" display-5">Update Food Item</h3>
              <br>
              <hr>
              <div class="card border-dark">
                <div class="card-body">
                <form action="../process/manageFoodItem.php"  method="post" autocomplete="off">
                  <div class="form-group">
                      <label for="">Food Item Name<span class="text-danger">*</span></label>
                      <input type="text"class="form-control"  name="foodItemName" value="<?php echo $value['foodItemName'] ?>" required >
                  </div>
                  <div class="form-group">
                      <label for="">Item Price<span class="text-danger">*</span></label>
                      <input type="number"class="form-control" min="10"  name="foodItemPrice" value="<?php echo $value['foodItemPrice'] ?>" required p>
                  </div>
                  <div class="form-group">
                      <label for="">Veg / Non-veg<span class="text-danger">*</span></label>
                      <select name="foodType"class="custom-select mr-sm-2" id="inlineFormCustomSelect"  required>
                        <option selected><?php echo $value['foodType'] ?></option>
                        <option value="Veg">Veg</option>
                        <option value="Non-veg">Non-veg</option>
                      </select>
                  </div>
                  <input type="hidden" name="restaurantID" value="<?php echo $value['id']; ?>">
                  <button class="btn btn-info btn-lg"type="submit" name="updateFood">Update</button>
                </form>
                </div>
              </div>
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
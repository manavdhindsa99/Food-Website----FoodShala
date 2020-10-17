<?php 
include_once '../helpers/init.php'; 
if (isset($_SESSION['customerEmail'])){
  header('Location:customerDashboard.php');
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
        <div class="col-sm-5" id="part">
          <h1 class="text-white addRestaurantheading" style= "text-align:center;">Delicious food is waiting.</h1>
        </div>
        <div class="col-sm-7">
              <h1 class="lead display-4">Login</h1>
              <br>
              <div class="card">
                <div class="card-body">
                  <form action="../process/customerLogin.php" method="post" autocomplete="off">
                  <div class="form-group">
                    <label for="">Email ID <span class="text-danger">*</span></label>
                    <input type="Email"class="form-control"  name="customerEmail" value="" required placeholder="Enter a Email ID">
                  </div>
                  <div class="form-group">
                    <label for="">Password<span class="text-danger">*</span></label>
                    <input type="password"class="form-control"  name="password" value="" required placeholder="Enter a Password">
                  </div>
                  <div class="form-group text-center">
                    <button type="submit"class="btn btn-info btn-lg" name="login">Login</button>
                    <br>
                    <br>
                    <a href="customerRegistration.php" class="text-muted">Create a new account!</a>
                    <br><br>
                    <a href="loginRestaurant.php" class="text-muted">Want to Login as Restaurant?</a>
                  </div>
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
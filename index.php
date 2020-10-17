<?php include_once 'helpers/init.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assests/css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Playball&display=swap" rel="stylesheet">

    <title>FoodShala</title>
  </head>
  <body class="landing">
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">FoodShala</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="views/viewMenu.php">Order Food</a></li>
                <li class="nav-item"><a class="nav-link" href="views/addRestaurant.php">Add  Restaurant</a></li>
                <li class="nav-item"><a class="nav-link" href="views/loginRestaurant.php">Restaurant Login</a></li>
                </ul>
            </div>
    </nav>    
    
    <div class="container">
        <div class="heroSection">
            <div class="row">
                <div class="col">
                    <h1 class="heading" style="font-family : Tangerine; text-align : center;">FoodShala</h1>
                    <h2 class="text-white">Order food from favourite restaurants near you.</h2>
                    <hr class="line">
                    <p id="spcl">
                    <a href="views/viewMenu.php" class="btn btn-success btn-lg">Order Now</a>
                    <a href="views/customerLogin.php" class="btn btn-success btn-lg">Login</a>
                    <a href="views/customerRegistration.php" class="btn btn-success btn-lg">Register</a>
                    </p>
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
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">FoodShala</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['restaurantName'])) { ?>
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <ul class="navbar-nav">
                <form class="form-inline" action="../process/loginRestaurant.php" method="post">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit"name="logout">LOGOUT</button>
                </form>
                </ul>
                <?php } elseif(isset($_SESSION['customerEmail'])){ ?>
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/viewMenu.php">Order Food</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/customerDashboard.php">Previous Orders</a></li>
                <ul class="navbar-nav">
                <form class="form-inline" action="../process/customerLogin.php" method="post">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit"name="logout">LOGOUT</button>
                </form>
                </ul>
                </ul>
                <?php } else{ ?>
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/viewMenu.php">Order Food</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/addRestaurant.php">Add  Restaurant</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/loginRestaurant.php">Restaurant Login</a></li>

                </ul>
                <?php } ?>
            </div>
    </nav>  
<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../signin.php'); //sends users to login screen if they haven't logged in
}
?>
<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Store 336</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Shop<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="women.php">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="men.php">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showCart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../signout_process.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Shop</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p class="text-center">
                <span class="lead">
                    <a class="btn btn-primary btn-lg" href="women.php" role="button">Women's Clothing</a>
                    <a class="btn btn-primary btn-lg" href="men.php" role="button">Men's Clothing</a>
                </span>
            </p>
        </div>

        </div><!--container-->
        
        
    </body>
</html>
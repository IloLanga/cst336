<?php
session_start();

//checks whether user has logged in
if (isset($_SESSION['username'])) {
    header('Location: shop/shop.php'); //sends users to login screen if they haven't logged in
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/signin.css">
    </head>
    <body class="text-center">
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
        <!--  <a class="navbar-brand" href="#">Store 336</a>-->
        <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
        <!--  </button>-->
        
        <!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
        <!--        <ul class="navbar-nav mr-auto">-->
        <!--            <li class="nav-item ">-->
        <!--                <a class="nav-link" href="index.php">Home</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--                <a class="nav-link" href="signin.php">Sign in</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item active">-->
        <!--                <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</nav>-->
        <div class="form-signin">
            <h1 class='title'>Store 336</h1>
            <form method="POST" action="register_process.php">
                <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                
                <label for="cpassword" class="sr-only">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password" required>
                
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                
                <label for="address" class="sr-only">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
                
                <button class="btn btn-lg btn-primary btn-block" id="registerBtn" type="submit">Register</button>
                <!--<button href="shop/shop.php" class="btn btn-lg btn-primary btn-block" id="shopBtn" onclick="window.location.href = 'shop/shop.php'">Shop!</button> <!--onclick="window.location.href = 'shop/shop.php';"-->
                <div id="responseMsg"></div>
            </form>
            <a class="strong" href="index.php"> Home </a>
        </div>
        
        
        <!--<h1>Register</h1>-->
        <!--<input type="text" id="usernameInput" placeholder="Username"><br>-->
        <!--<input type="password" id="passwordInput" placeholder="Password"><br>-->
        <!--<input type="password" id="confirmPasswordInput" placeholder="Confirm Password"><br>-->
        <!--<div id="differentPswd"></div>-->
        <!--<input type="text" id="emailInput" placeholder="Email"><br>-->
        <!--<input type="text" id="addressInput" placeholder="Address"><br>-->
        <!--<div id="empty"></div>-->
        <!--<button id="registerBtn">Register</button>-->
        <!--<button id="shopBtn" onclick="window.location.href = 'shop/shop.php';">Start Shopping !</button>-->
        
        
        <!--<script>
        /*global $*/
            // document.getElementById("shopBtn").disabled = true;
        
        
            // $("#registerBtn").on("click", function() {
                
                
            //   var username = $("#usernameInput").val();
            //   var password = $("#passwordInput").val();
            //   var cpassword = $("#confirmPasswordInput").val();
            //   var email = $("#emailInput").val();
            //   var address = $("#addressInput").val();
            //       $.ajax({

            //             method: "POST",
            //             url: "api/registerAPI.php",
            //             data: { "username": username,
            //             "password": password,
            //             "cpassword": cpassword,
            //             "email": email,
            //             "address": address
            //             },
            //             success: function(data,status) {
            //             $("#responseMsg").html(data);
            //             },
            //             complete: function(data,status) { //optional, used for debugging purposes
            //             // alert(status);
            //             $("#responseMsg").html(data);
            //             }
            //         });//ajax
                    
            // }); //onclick register
        
        </script>-->
    </body>
</html>
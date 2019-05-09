<?php
session_start();

//checks whether user has logged in
if (isset($_SESSION['username'])) {
    
    header('location: shop/shop.php'); //sends users to login screen if they haven't logged in
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/signin.css">
        <title>Sign-in</title>
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
        <!--            <li class="nav-item active">-->
        <!--                <a class="nav-link" href="signin.php">Sign in<span class="sr-only">(current)</span></a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--                <a class="nav-link" href="register.php">Register</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</nav>-->
        <div class="form-signin">
            <h1 class='title'>Store 336</h1>
            <form method="POST" action="login_process.php">
              <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              <div class="text-dark">user: test | pass: test</div>
              <label for="username" class="sr-only">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            <a class="strong" href="index.php"> Home </a>
        </div>
    </body>
    
    
    
    
    
    <!--<body>-->
    <!--    <h1>Sign-in</h1>-->
    <!--    <form method="POST" action="api/singninAPI.php">-->
    <!--        Username: <input type="text" name="username" id="username"/> <br/>-->
    <!--        Password: <input type="password" name="password"/> <br/>-->
    <!--        <input type="submit" value="Login!" >-->
    <!--    </form>-->
    <!--    <script>-->
            <!--// $("#signinBtn").on("click", function() {-->
            <!--//     var username = $("#usernameInput").val();-->
            <!--//     var password = $("#passwordInput").val();-->
                
            <!--//     if (username != "" && password != "") {-->
            <!--//         $("#empty").html("");-->
                    
            <!--//         $.ajax({-->
    
            <!--//             method: "POST",-->
            <!--//             url: "api/signinAPI.php",-->
            <!--//             dataType: "json",-->
            <!--//             data: { -->
            <!--//                 "username": username,-->
            <!--//                 "password": password,-->
            <!--//             },-->
            <!--//             success: function(data,status) {-->
            <!--//                 alert(data);-->
                        
            <!--//             },-->
            <!--//             complete: function(data,status) { //optional, used for debugging purposes-->
            <!--//             alert(status);-->
            <!--//             }-->
    
            <!--//         });//ajax-->
            <!--//     } else {-->
            <!--//         $("#empty").html("Username or password is empty").css("color", "red");-->
            <!--//     }-->
            <!--// });-->
            
    <!--    </script>-->
    <!--</body>-->
</html>
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
        <title>Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            .card-img-top {
                width: 100%;
                height: 20vw;
                object-fit: cover;
            }
        </style>
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
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/admin_signin.php">Admin Panel</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Home</h1>
            <p class="lead">Welcome to our online shop Store 336, sign up to be able to discover more of our products and buy the perfect outfit!</p>
            <hr class="my-4">
            <p class="text-center">
                <span class="lead">
                    <a class="btn btn-primary btn-lg" href="signin.php" role="button">Sign in</a>
                    <a class="btn btn-warning btn-lg" href="register.php" role="button">Register</a>
                </span>
            </p>
        </div>
        <div id="itemView" class="text-left"></div>
        </div><!--container-->



        <!--<h1>Home</h1>-->
        <!--<h2>Description of company?</h2>-->
        <!--<p>[sample images/logo/etc]</p>-->
        <!--<p><a href="signin.php">Sign in</a></p>-->
        <!--<p><a href="register.php">Create account</a></p>-->
        <!--<footer>[have a footer?]</footer>-->
        
        
    </body>
    <script>
    
    $.ajax({
                    method: "GET",
                    url: "api/getItemsIndexAPI.php",
                    dataType: "json",
                    data: {
                        // "gender": "M"
                        },
                    success: function(data, status) {
                        console.log(data);
                        
                        //<div class='card-columns'>
                       let itemStr = "<div class='card-columns'>";
                       //itemStr = "<div class='card-group'>"
                       data.forEach(function(key) {
                            itemStr += "<div class='card' style='width: 18rem;'>";
                            itemStr +=      "<img class='card-img-top' src='" + key['imageURL'] + "'>";
                            itemStr +=      "<div class='card-body'>";
                            itemStr +=          "<h5 class='card-title'>"+ key['name'] +"</h5>";
                            //itemStr +=          "<p class='card-text'>"+ key['description'] +"</p>"; causes issue with height
                            itemStr +=      "</div>";
                            itemStr +=      "<ul class='list-group list-group-flush'>";
                            itemStr +=          "<li class='list-group-item'>Price: "+key['price'] +"</li>";
                            itemStr +=      "</ul>";
                            itemStr += "</div>";
                            
                        });
                        itemStr += "</div>"
                        $("#itemView").html(itemStr);

                        
                    }
                }); //ajax 
                
            
            
    </script>
</html>
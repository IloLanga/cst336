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
        <title>Store 336 | Shop Men's Clothing</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
    <!--This style keeps image height consistent so all cards are aligned correctly -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="women.php">Women<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="men.php">Men<span class="sr-only">(current)</span></a>
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
                <h1 class="display-4 text-center">Men</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p class="text-center">
                    <span class="lead">
                        <!--<a class="btn btn-primary btn-lg" href="#" role="button">Tops</a>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Bottoms</a>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Accessories</a> -->
                        <br/><br/><br/>
                        Item: <input type ="text" name="searchItem" id="searchItem"/><br/>
                        Sort by: </br>
                        <input type="radio" name="orderBy" value="lowest" id="lowest"/> Lowest Price <br>
                        <input type="radio" name="orderBy" value="highest" id="highest"/> Highest Price <br>
                        <button id ="search">Search</button>
                    </span>
                </p>
            </div>
            <div id="itemView" class="text-left"></div>
        </div><!--container-->
    </body>
    <script>

        /*global $*/
        
            function confirmDelete(){
                
                return confirm("Are you sure you want to delete this item?");
                
            }
            
                
                
                //TODO: List all items
                $.ajax({
                    method: "GET",
                    url: "../api/getItemsByGenderAPI.php",
                    dataType: "json",
                    data: {
                        "gender": "M"
                        },
                    success: function(data, status) {

                        //<div class='card-columns'>
                       let itemStr = "<div class='card-columns'>";
                       //itemStr = "<div class='card-group'>"
                       data.forEach(function(key) {
                            // itemStr += "<p>";
                            // itemStr += "<b>" + key['name'] + "</b>: " + key['description'] + ", " + key['size'] + ", " + key['stock'] + ", "  + key['price'];
                            // itemStr += "<img src='../" + key['imageURL'] + "'>";
                            // itemStr += "</p>";
                            
                            // //add the link to edit and delete
                            // itemStr += "<div class='row'>" + 
                            //                     "<div class='col1'>" + 
                            //                     "<a class=\"btn btn-primary\"  href='edit.php?id="+key.id+"'> EDIT </a>" +
                            //                      "<form action='../api/deleteItemsAPI.php' method='post' onsubmit='return confirmDelete()'>"+
                            //                     "<input type='hidden' name='id' value='"+ key.id + "'>" +
                            //                     "<button class=\"btn btn-outline-danger\">Delete</button></form>";
                            itemStr += "<div class='card' style='width: 18rem;'>";
                            itemStr +=      "<img class='card-img-top' src='../" + key['imageURL'] + "'>";
                            itemStr +=      "<div class='card-body'>";
                            itemStr +=          "<h5 class='card-title'>"+ key['name'] +"</h5>";
                            //itemStr +=          "<p class='card-text'>"+ key['description'] +"</p>"; causes issue with height
                            itemStr +=      "</div>";
                            itemStr +=      "<ul class='list-group list-group-flush'>";
                            itemStr +=          "<li class='list-group-item'>Size: "+key['size'] +"</li>";
                            itemStr +=          "<li class='list-group-item'>Stock: "+key['stock'] +"</li>";
                            itemStr +=          "<li class='list-group-item'>Price: $"+key['price'] +"</li>";
                            itemStr +=      "</ul>";
                            itemStr +=      "<div class='card-body'>";
                            itemStr +=          "<a href='' class='card-link'>Add to cart</a>";
                            //itemStr +=          "<a href='' class='card-link'>Delete</a>";
                            itemStr +=      "</div>";
                            itemStr += "</div>";
                            
                        });
                        itemStr += "</div>"
                        $("#itemView").html(itemStr);

                        
                    }
                }); //ajax 
            
            //Show items by price
             
                //Show items by price
        $("#search").on("click", function(){
                $("#itemView").html("");
                $.ajax({

                    method: "GET",
                    url: "../api/searchByAPI.php",
                    dataType: "json",
                    data: { "gender": "M",
                            "searchItem" : $("#searchItem").val(),
                            "lowest": $("#lowest:checked").val(), 
                            "highest": $("#highest:checked").val()
                            },
                    success: function(data,status) {
                          //<div class='card-columns'>
                       let itemStr = "<div class='card-rows'>";
                       //itemStr = "<div class='card-group'>"
                       data.forEach(function(key) {
                            // itemStr += "<p>";
                            // itemStr += "<b>" + key['name'] + "</b>: " + key['description'] + ", " + key['size'] + ", " + key['stock'] + ", "  + key['price'];
                            // itemStr += "<img src='../" + key['imageURL'] + "'>";
                            // itemStr += "</p>";
                            
                            // //add the link to edit and delete
                            // itemStr += "<div class='row'>" + 
                            //                     "<div class='col1'>" + 
                            //                     "<a class=\"btn btn-primary\"  href='edit.php?id="+key.id+"'> EDIT </a>" +
                            //                      "<form action='../api/deleteItemsAPI.php' method='post' onsubmit='return confirmDelete()'>"+
                            //                     "<input type='hidden' name='id' value='"+ key.id + "'>" +
                            //                     "<button class=\"btn btn-outline-danger\">Delete</button></form>";
                            itemStr += "<div class='column'>";
                            itemStr += "<div class='card' style='width: 18rem;'>";
                            itemStr +=      "<img class='card-img-top' src='../" + key['imageURL'] + "'>";
                            itemStr +=      "<div class='card-body'>";
                            itemStr +=          "<h5 class='card-title'>"+ key['name'] +"</h5>";
                            //itemStr +=          "<p class='card-text'>"+ key['description'] +"</p>"; causes issue with height
                            itemStr +=      "</div>";
                            itemStr +=      "<ul class='list-group list-group-flush'>";
                            itemStr +=          "<li class='list-group-item'>Size: "+key['size'] +"</li>";
                            itemStr +=          "<li class='list-group-item'>Stock: "+key['stock'] +"</li>";
                            itemStr +=          "<li class='list-group-item'>Price: $"+key['price'] +"</li>";
                            itemStr +=      "</ul>";
                            itemStr +=      "<div class='card-body'>";
                            itemStr +=          "<a href='' class='card-link'> Add to cart</a>";
                            //itemStr +=          "<a href='' class='card-link'>Delete</a>";
                            itemStr +=      "</div>";
                            itemStr += "</div>";
                            itemStr += "</div>";
                            
                        });
                        itemStr += "</div>"
                        $("#itemView").html(itemStr);

                        
                    }

                });//ajax
        });//#search
            
    </script>
</html>
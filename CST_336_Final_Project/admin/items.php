<?php
session_start();
//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    header('location: admin_signin.php'); //sends users to login screen if they haven't logged in
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Panel | Items</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                        <a class="nav-link" href="admin_panel.php">Admin Panel</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Modify Items <span class="sr-only">(current)</span></a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signout_process.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
        <h1>ALL ITEMS</h1>
        <div id="itemView" class="text-left"></div>
        
        </div>
    </body>
    <script>

        /*global $*/
        
            function confirmDelete(){
                
                return confirm("Are you sure you want to delete this item?");
                
            }
            
                
                
                //TODO: List all items
                $.ajax({
                    method: "GET",
                    url: "../api/getItemsAPI.php",
                    dataType: "json",
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
                            itemStr +=          "<li class='list-group-item'>Price: "+key['price'] +"</li>";
                            itemStr +=      "</ul>";
                            itemStr +=      "<div class='card-body text-center'>";
                            itemStr +=          "<form action='../api/deleteItemsAPI.php' method='post' onsubmit='return confirmDelete()'>";    
                            itemStr +=          "<input type='hidden' name='id' value='"+ key.id + "'>";
                            itemStr +=          "<span style='display: inline;'>";
                            itemStr +=          "<a class=\"btn btn-primary\"  href='edit.php?id="+key.id+"'> Modify </a>&nbsp&nbsp&nbsp"; 
                            itemStr +=          "<button class=\"btn btn-danger\" type='submit'> Delete </button>";
                            itemStr +=          "</span>"; 
                            itemStr +=          "</form>"; 
                            itemStr +=      "</div>";
                            itemStr += "</div>";
                            
                        });
                        itemStr += "</div>"
                        $("#itemView").html(itemStr);

                        
                    }
                }); //ajax 
                
    </script>
</html>
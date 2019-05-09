<?php
session_start();
//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    header('location: admin_signin.php'); //sends users to login screen if they haven't logged in
    
}

$getId = $_GET['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Modify Item </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">

         <script>
                // $.ajax({
                //     type: "GET",
                //     url: "../lab6/api/getCategories.php",
                //     dataType: "json",
                //     success: function(data, status) {
                //         data.forEach(function(key) {
                //             $("#catId").append("<option value=" + key["catId"] + ">" + key["catName"] + "</option>");
                //         });
                //         getProductInfo();
                //     }
                // }); 

                $(document).ready(function(){ 
                    let itemId = "" + <?=$getId?> + "";
                    $.ajax({
                        type: "GET",
                        url: "../api/getProductInfo.php",
                        dataType: "json",
                        data:{"id": itemId},
                        success: function(data, status) {
                             $("#modifyItemInputName").val(data["name"]);
                             $("#modifyItemInputDescription").val(data["description"]);
                             $("#modifyItemInputGender").val(data["gender"]);
                             $("#modifyItemInputType").val(data["type"]);
                             $("#modifyItemInputSize").val(data["size"]);
                             $("#modifyItemInputStock").val(data["stock"]);
                             $("#modifyItemInputPrice").val(data["price"]);
                             $("#modifyItemInputImageURL").val(data["imageURL"]);
                        }
                    });

                    
                    $("#modifyItemBtn").on("click",function(){
                        $.ajax({
                            method: "GET",
                            url: "../api/editItemsAPI.php",
                            dataType: "json",
                            data:{"id": itemId,
                                "name": $("#modifyItemInputName").val(),
                                "description": $("#modifyItemInputDescription").val(),	
                                "gender": $("#modifyItemInputGender").val(),
                                "type":  $("#modifyItemInputType").val(),
                                "size":  $("#modifyItemInputSize").val(),
                                "stock":  $("#modifyItemInputStock").val(),
                                "price":  $("#modifyItemInputPrice").val(),
                                "imageURL":  $("#modifyItemInputImageURL").val()
                            },
                            success: function(data, status) {
                                //Not working for some reason
                                //alert("Item successfully updated!");
                                //window.location.href = "items.php";
                                //window.location.replace("items.php");
                            }
                            
                        });//end
                        // Temp fix.. this should go in success
                        alert("Item successfully updated!");
                        //window.location.href = "items.php";
                        window.location.replace("items.php");
                    });
                    
                });//documentReady
                
                </script>
        
        
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
            <div class="jumbotron">
              <h1 class="text-center">Modify Item</h1>
           </div>
            <div class="row text-center border">
                <div class="col">
                    <input type="text" id="modifyItemInputName" name="name" placeholder="Name"><br />
                    <input type="text" id="modifyItemInputDescription" name="description" placeholder="Description"><br />
                    <input type="text" id="modifyItemInputGender" name="gender" placeholder="Gender"><br />
                    <input type="text" id="modifyItemInputType" name="type" placeholder="Type"><br />
                    <input type="text" id="modifyItemInputSize" name="size" placeholder="Size"><br />
                    <input type="text" id="modifyItemInputStock" name="stock" placeholder="Stock"><br />
                    <input type="text" id="modifyItemInputPrice" name="price" placeholder="Price"><br />
                    <input type="text" id="modifyItemInputImageURL" name="imageURL" placeholder="Image URL"><br />
                    <br />
                    <button id="modifyItemBtn" class="btn btn-primary">Modify Item</button><br />
                      
                    <span id="totalProducts"></span>
                    <br />
                <!-- TODO: -->
                </div>
            </div>
            <div id="itemsMsg" class="text-center"></div>
            <br />
            </div><!-- container-->
    </body>
</html>
<?php
session_start();

//checks whether user has logged in
if (!isset($_SESSION['adminName'])) {
    
    header('location: login.html'); //sends users to login screen if they haven't logged in
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        
    </head>
    <body>
        <div class="Container bg-primary">
            </br>
            <h1 class="container text-light">Add new product</h1></br>
        </div>
        Enter Product Name:<input type="text" class="form-control bg-light" id="productName" size="50" placeholder="Product Name">
        <br></br>
        Enter Product Description: </br>
        <textarea id="productDescription" class="form-control bg-light" cols="40" rows="3" placeholder="Description"></textarea>
        <br></br>
        Product Image:<input type = "text" class="form-control bg-light" id="productImage" placeholder="Image Link">
        <br/></br>
        Product Price: <input type="text" class="form-control bg-light" id="productPrice" placeholder="Price">
        <br/></br>
        
        Categories Name: 
        <div class="input-group mb-3">
          <select class="custom-select bg-light" id="catId" width="50">
            <option selected>Select</option>
          </select>
        </div>
        
        <!--Categories Name: <Select id="catId">-->
        <!--<Option> Select One </Option>-->
        <!--</Select><br></br>-->
        
        <button id="submitButton" class="btn btn-primary">Add Product</button>
        </br></br>
        <span id="totalProducts"></span>
    </body>
    
    <script>
        $.ajax({
                    type: "GET",
                    url: "../lab6/api/getCategories.php",
                    dataType: "json",
                    success: function(data, status) {
                        data.forEach(function(key) {
                            $("#catId").append("<option value=" + key["catId"] + ">" + key["catName"] + "</option>");
                        });
                    }
                }); 
                
        $("#submitButton").on("click", function(){
                   //alert("test");
                   $.ajax({
                    type: "GET",
                    url: "api/addProductAPI.php",
                    dataType: "json",
                    data : {"productName": $("#productName").val(),
                        "productDescription": $("#productDescription").val(),
                        "productImage": $("#productImage").val(),
                        "productPrice": $("#productPrice").val(),
                        "catId": $("#catId").val()
                        
                    },
                    success: function(data, status) {
                        $("#totalProducts").html(data.totalproducts + " Products");
                        alert(data);
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    alert(status);
                    }
                }); 
        });
    </script>
    <style>
        body {
            margin: 35px;
        }
    </style>
</html>
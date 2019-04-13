<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

         <script>
                $.ajax({
                    type: "GET",
                    url: "../lab6/api/getCategories.php",
                    dataType: "json",
                    success: function(data, status) {
                        data.forEach(function(key) {
                            $("#catId").append("<option value=" + key["catId"] + ">" + key["catName"] + "</option>");
                        });
                        getProductInfo();
                    }
                }); 
                
                
                 
            function getProductInfo() {    
                $.ajax({
                    type: "GET",
                    url: "api/getProductInfo.php",
                    dataType: "json",
                    data:{"productId": <?=$_GET['productId']?>},
                    success: function(data, status) {
                         $("#productName").val(data["productName"]);
                         $("#productDescription").val(data["productDescription"]);
                         $("#productPrice").val(data["productPrice"]);
                         $("#productImage").val(data["productImage"]);
                         $("#catId").val(data["catId"]).change();
                    }
                });
                
            }    
                
                $(document).ready(function(){  
                    
                    $("#submitButton").on("click",function(){
                        
                        $.ajax({
                            type: "GET",
                            url: "api/updateProductAPI.php",
                            dataType: "json",
                            data:{"productId": <?=$_GET['productId']?>,
                                "productDescription": $("#productDescription").val(),
                                "productPrice": $("#productPrice").val(),
                                "productName": $("#productName").val(),
                                "catId": $("#catId").val(),
                                "productImage": $("#productImage").val()
    
                            },
                            success: function(data, status) {
                                //$("#updated").html("Product Updated");
                            }
                            
                        });//end
                        $("#updated").html("Product Updated");
                    });
                    
                });//documentReady
                
                </script>
        
        
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
        
    <!--<h1> Update Product</h1>-->
    <!--Enter Product Name:<input type="text" id = "productName" size="50">-->
    <!--<br>-->
    <!--Enter Product Description: <textarea id="productDescription" cols="40" rows="3"></textarea>-->
    <!--<br>-->
    <!--Product Image:<input type = "text" id = "productImage">-->
    <!--<br/>-->
    <!--Product Price: <input type="text" id="productPrice">-->
    <!--<br/>-->
    <!--Categories Name: <Select id = "catId">-->
    <!--<Option> Select One </Option>-->
    <!--</Select><br>-->
    
    <button id="submitButton" class="btn btn-primary">Update Product</button>
    
    <span id="updated"></span>
    
    
    
    
    
    
        <style>
            body {
                margin: 35px;
            }
        </style>
    </body>
</html>
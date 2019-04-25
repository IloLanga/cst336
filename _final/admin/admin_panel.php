<?php
session_start();
//Check if logged in & if so redirect to shop
//Use session/cookies to keep track of cart
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Panel </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script>
            $(document).ready(function(){
                //TODO: List all admins
                $.ajax({
                    method: "GET",
                    url: "../api/getAdminsAPI.php",
                    dataType: "json",
                    success: function(data, status) {
                       let adminsStr = "";
                       data.forEach(function(key) {
                            adminsStr += "<p>";
                            adminsStr += "<a href='#' class='adminLink' id='" + key['username'] + "'>" + key['username'] + "</a>: ";
                            adminsStr += key['password'];
                            adminsStr += "</p>";
                        });
                        
                        $("#adminView").html(adminsStr);
                    }
                }); //ajax 
                
                //TODO: Modify admins
                
                

                
                //TODO: List all users
                
                
                //TODO: List all items
                
                
                //TODO: List all orders
                
                
            });//document
            
            $(document).on('click', '.adminLink', function() {

                $("#modifyAdminModal").modal("show");
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Admin Panel </h1>
            </div>
            <br />
            
            <h1 class="text-center">Admin</h1>
            <div class="row text-center border">
                <div class="col">
                    <h2>Modify Admin</h2>
                    <div id="adminView" class="text-left"></div>
                    <br />
                </div>
                <div class="col">
                    <h2>Add Admin</h2>
                    <input type="text" id="addAdminInputUsername" name="type" placeholder="Username"><br />
                    <input type="text" id="addAdminInputPassword" name="size" placeholder="Password"><br />
                    <br />
                    <button id="addAdminBtn" class="btn btn-primary text-center">Add Admin</button><br />
                    <br />
                </div>
            </div>
            <div id="adminMsg" class="text-center"></div>
            <br />
            
            <h1 class="text-center">Users</h1>
            <div class="row text-center border">
                <div class="col">
                    <h2> Modify Users </h2>
                    <!-- TODO: -->
                    List all Users with [Edit User][Delete User]<br />
                    <br />
                </div>
                                
                <!-- TODO: -->
                <div class="col">
                    <h2> Add Users </h2>
                    <input type="text" id="addUserInputUsername" name="username" placeholder="Username"><br />
                    <input type="text" id="addUserInputPassword" name="password" placeholder="Password"><br />
                    <input type="text" id="addUserInputEmail" name="email" placeholder="Email"><br />
                    <input type="text" id="addUserInputAddress" name="address" placeholder="Address"><br />
                    <br />
                    <button id="addUserBtn" class="btn btn-primary">Add User</button><br />
                    <br />
                </div>
            </div>
            <div id="userMsg" class="text-center"></div>
            <br />
            
            <h1 class="text-center">Items</h1>
            <div class="row text-center border">
                <div class="col">
                    <h2> Add Items </h2>
                    <input type="text" id="addItemsInputName" name="name" placeholder="Name"><br />
                    <input type="text" id="addItemsInputDescription" name="description" placeholder="Description"><br />
                    <input type="text" id="addItemsInputGender" name="gender" placeholder="Gender"><br />
                    <input type="text" id="addItemsInputType" name="type" placeholder="Type"><br />
                    <input type="text" id="addItemsInputSize" name="size" placeholder="Size"><br />
                    <input type="text" id="addItemsInputStock" name="stock" placeholder="Stock"><br />
                    <input type="text" id="addItemsInputImageURL" name="imageURL" placeholder="Image URL"><br />
                    <br />
                    <button id="addItemBtn" class="btn btn-primary">Add Item</button><br />
                    <br />
                <!-- TODO: -->
                </div>
                
                <div class="col">
                    <h2> Modify Items </h2>
                    List all Items with [Edit Item][Delete Item]<br />
                <!-- TODO: -->
                </div>
            </div>
            <div id="itemsMsg" class="text-center"></div>
            <br />
            
            <h1 class="text-center">Orders</h1>
            <div class="row text-center border">
                <div class="col">            
                    <h2> Modify Orders </h2>
                    List all Orders with [Edit Orders][Delete Orders]<br />
                    <br />
                </div>
            <!-- TODO: -->
            </div>
            <div id="ordersMsg" class="text-center"></div>
            <br />
            
            <!-- Modal -->
            <div class="modal" tabindex="-1" role="dialog" id="modifyAdminModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Modify Admin </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <div id="detail"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning mx-auto" data-dismiss="modal" id="editAdminBtn">Edit</button>
                            <button type="button" class="btn btn-danger mx-auto" data-dismiss="modal" id="deleteAdminBtn">Delete</button>
                            <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
                            <input type="hidden" id="jobId" name="jobId" value="0">
                        </div>
                    </div>
                </div>
            </div><!-- Modal -->
            
            
        </div><!-- Container -->
    </body>
</html>
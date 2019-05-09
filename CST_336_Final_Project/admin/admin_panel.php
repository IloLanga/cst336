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
        <title> Admin Panel </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
        <script>
        /*global $*/
        
         
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
                
                //TODO: Add admins
                
                
                
                //TODO: List all users
                $.ajax({
                    method: "GET",
                    url: "../api/getUsersAPI.php",
                    dataType: "json",
                    success: function(data, status) {
                      let usersStr = "";
                      data.forEach(function(key) {
                            usersStr += "<p>";
                            usersStr += "<a href='editUser.php?username="+ key['username'] +" class='userLink' id='" + key['username'] + "'>" + key['username'] + "</a>: ";
                            usersStr += key['password'];
                            usersStr += "</p>";
                        });
                        
                        $("#userView").html(usersStr);
                    }
                }); //ajax get users
                
                
               
                
                
                
                //TODO: List all orders
                
                
                //TODO: Add items
                $("#addItemBtn").on("click",function(){
                    $.ajax({
                        method: "GET",
                        url: "../api/insertItemsAPI.php",
                        dataType: "json",
                        data: {
                            "name": $("#addItemsInputName").val(),
                            "description": $("#addItemsInputDescription").val(),	
                            "gender": $("#addItemsInputGender").val(),
                            "type":  $("#addItemsInputType").val(),
                            "size":  $("#addItemsInputSize").val(),
                            "stock":  $("#addItemsInputStock").val(),
                            "price":  $("#addItemsInputPrice").val(),
                            "imageURL":  $("#addItemsInputImageURL").val()
                        },
                        success: function(data, status) {
                        }
                    }); //ajax 
                     $("#itemsMsg").html("Item added successfully!").css("color","green");
                });
                
                $("#addAdminBtn").on("click", function() {
                    // console.log($("#addAdminInputUsername").val() + $("#addAdminInputPassword").val());
                    $.ajax({
                        method: "POST",
                        url: "addAdmin.php",
                        dataType: "json",
                        data: {
                            "username": $("#addAdminInputUsername").val(),
                            "password": $("#addAdminInputPassword").val()	
                        },
                        success: function(data, status) {
                            // console.log(status)
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                            // console.log(status);
                            
                            $("#addAdminMsg").html("Admin successfully added !").css("color", "green");
                        }
                    }); //ajax 
                });
                
                
                
            });//document
            
            $(document).on('click', '.adminLink', function() {
                $("#modifyAdminModal").modal("show");
            });
            
            function orderInfo(action) {
                // alert(action);
                $.ajax({

                    method: "GET",
                    url: "../api/getOrderInfoAPI.php",
                    dataType: "json",
                    data: { "action": action},
                    success: function(data,status) {
                    if (action == "total") {
                        $("#totalOrderDisplay").html("$" + data["SUM(totalPrice)"]);
                    } else if (action == "average") {
                        $("#averageOrderDisplay").html("$" + data["AVG(totalPrice)"]);
                    } else if (action == "max") {
                        $("#maxOrderDisplay").html("$" + data["MAX(totalPrice)"]);
                    }
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    // alert(status);
                    }
                    
                });//ajax
            } //orderinfo function
            
            
            
            
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Admin Panel <span class="sr-only">(current)</span></a>
          </li>
                <li class="nav-item">
            <a class="nav-link" href="items.php">Modify Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signout_process.php">Sign out</a>
          </li>
        </ul>
      </div>
    </nav>
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Admin Panel </h1>
                <br>
                <!--<p class="text-center"><a href="signout_process.php" class="btn btn-danger">Sign Out</a></p>-->
            </div>

            
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
                    <div id="addAdminMsg"></div>
                </div>
            </div>
            <div id="adminMsg" class="text-center"></div>
            <br />
            
            <h1 class="text-center">Users</h1>
            <div class="row text-center border">
                <div class="col">
                    <h2> Modify Users </h2>
                    <!-- TODO: -->
                    <!--List all Users with [Edit User][Delete User]<br />-->
                    <div id="userView" class="text-left"></div>
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
                    <input type="text" id="addItemsInputPrice" name="price" placeholder="Price"><br />
                    <input type="text" id="addItemsInputImageURL" name="imageURL" placeholder="Image URL"><br />
                    <br />
                    <div class="text-center">

                            <button id="addItemBtn" class="btn btn-primary">Add Item</button>
                            <br><br>
                            <form action="items.php">
                                <button id="itemButton" class="text-left btn btn-danger">Modify Items</button>
                            </form>                           

                    </div>
                    <br>
                    <span id="totalProducts"></span>
                    <br />
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
            
            <h1 class="text-center">Reports</h1>
            <div class="row text-center border">
                <div class="col">            
                    <button onclick="orderInfo('total')" id="totalOrdersButton" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#totalOrderModal">Total Orders</button>
                    <button onclick="orderInfo('average')" id="avgOrderButton" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#averageOrderModal">Avg Order Total</button>
                    <button onclick="orderInfo('max')" id="maxOrdersButton" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#maxOrderModal">Max Order</button>
                </div>
            </div>
            <div id="displayReport" class="text-center"></div>
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
            
            <!-- Modal total Order-->
            <div class="modal" tabindex="-1" role="dialog" id="totalOrderModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Total Order </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="totalOrderDisplay"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
                            <input type="hidden" id="jobId" name="jobId" value="0">
                        </div>
                    </div>
                </div>
            </div><!-- Modal total Order-->
            
            <!-- Modal average Order-->
            <div class="modal" tabindex="-1" role="dialog" id="averageOrderModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Average Total Order </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="averageOrderDisplay"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
                            <input type="hidden" id="jobId" name="jobId" value="0">
                        </div>
                    </div>
                </div>
            </div><!-- Modal average Order-->
            
            <!-- Modal max Order-->
            <div class="modal" tabindex="-1" role="dialog" id="maxOrderModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Max Order </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="maxOrderDisplay"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
                            <input type="hidden" id="jobId" name="jobId" value="0">
                        </div>
                    </div>
                </div>
            </div><!-- Modal max Order-->
            
            
        </div><!-- Container -->
    </body>
</html>
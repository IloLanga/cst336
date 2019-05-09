<!DOCTYPE html>
<html>
    <head>
        <title> Modify User </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css">

         <script>
                 
            function getUserInfo() {   
                $.ajax({
                    type: "GET",
                    url: "../api/getUserInfo.php", //TODO: do getUserInfo.php
                    dataType: "json",
                    data:{"username": <?=$_GET['username']?>},
                    success: function(data, status) {
                        alert("in success");
                        // alert(data[0]["username"]);
                        //  $("#modifyItemInputUsername").val(data["username"]);
                        //  $("#modifyItemInputPassword").val(data["password"]);
                        //  $("#modifyItemInputEmail").val(data["email"]);
                        //  $("#modifyItemInputAddress").val(data["address"]);
                    },
                    success: function(data, status) {
                        alert(status);
                    }
                });
                
            }    
                
                $(document).ready(function(){  
                    getUserInfo();
                    alert( <?=$_GET['username']?>);
                    
                //     $("#modifyItemBtn").on("click",function(){
                //         $.ajax({
                //             method: "GET",
                //             url: "../api/editItemsAPI.php",
                //             dataType: "json",
                            // data:{"id": ,
                //                 "name": $("#modifyItemInputName").val(),
                //                 "description": $("#modifyItemInputDescription").val(),	
                //                 "gender": $("#modifyItemInputGender").val(),
                //                 "type":  $("#modifyItemInputType").val(),
                //                 "size":  $("#amodifyItemInputSize").val(),
                //                 "stock":  $("#modifyItemInputStock").val(),
                //                 "price":  $("#modifyItemInputPrice").val(),
                //                 "imageURL":  $("#modifyItemInputImageURL").val()
                //             },
                //             success: function(data, status) {
                //                 //Not working for some reason
                //                 //alert("Item successfully updated!");
                //                 //window.location.href = "items.php";
                //                 //window.location.replace("items.php");
                //             }
                            
                //         });//end
                //         // Temp fix.. this should go in success
                //         alert("Item successfully updated!");
                //         //window.location.href = "items.php";
                //         window.location.replace("items.php");
                    // });
                    
                });//documentReady
                
                </script>
        
        
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
              <h1 class="text-center">Modify User</h1>
           </div>
            <div class="row text-center border">
                <div class="col">
                    <input type="text" id="modifyItemInpuUserName" name="username" placeholder="Username"><br />
                    <input type="text" id="modifyItemInputPassword" name="password" placeholder="Password"><br />
                    <input type="text" id="modifyItemInputEmail" name="email" placeholder="Email"><br />
                    <input type="text" id="modifyItemInputAddress" name="address" placeholder="Address"><br />
                    <br />
                    <button id="modifyUserBtn" class="btn btn-primary">Modify User</button><br />
                      
                    <span id="totalUsers"></span>
                    <br />
                <!-- TODO: -->
                </div>
            </div>
            <div id="usersMsg" class="text-center"></div>
            <br />
            </div><!-- container-->
    </body>
</html>
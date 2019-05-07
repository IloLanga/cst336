<?php
session_start();
//Check if logged in & if so redirect to shop
//Use session/cookies to keep track of cart
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Register</h1>
        <input type="text" id="usernameInput" placeholder="Username"><br>
        <input type="password" id="passwordInput" placeholder="Password"><br>
        <input type="password" id="confirmPasswordInput" placeholder="Confirm Password"><br>
        <div id="differentPswd"></div>
        <input type="text" id="emailInput" placeholder="Email"><br>
        <input type="text" id="addressInput" placeholder="Address"><br>
        <div id="empty"></div>
        <button id="registerBtnn">Register</button>
        
        
        <script>
        /*global $*/
            $("#registerBtnn").on("click", function() {
                
                
              var username = $("#usernameInput").val();
            //   console.log(username);
              var password = $("#passwordInput").val();
              var cPassword = $("#confirmPasswordInput").val();
              var email = $("#emailInput").val();
              var address = $("#addressInput").val();
               
              if (username != "" && password != "" && cPassword != "" && email != "" && address != "") {
                  $("#empty").html("");
                  if (password == cPassword) {
                       $("#differentPswd").html("");
                    //   console.log("all good");
                      $.ajax({

                            method: "POST",
                            url: "api/registerAPI.php",
                            dataType: "json",
                            data: { "username": username,
                            "password": password,
                            "email": email,
                            "address": address, 
                            },
                            success: function(data,status) {
                                // console.log("lalal");
                            
                            },
                            complete: function(data,status) { //optional, used for debugging purposes
                            alert(status);
                            }

                        });//ajax
                        
                        $("#empty").html("Welcome " + username + ", you have been succesfully registered !").css("color", "blue");
                       
                  } else {
                      $("#differentPswd").html("Passwords must be identical");
                  }
              } else {
                  $("#empty").html("All fields must be full").css("color", "red");
              }
            }); //onclick register
        </script>
    </body>
</html>
<?php
session_start();
//Check if logged in & if so redirect to shop
//Use session/cookies to keep track of cart
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <input type="text" id="usernameInput" placeholder="Username"><br>
        <input type="password" id="passwordInput" placeholder="Password"><br>
        <input type="password" id="confirmPasswordInput" placeholder="Confirm Password"><br>
        <input type="text" id="emailInput" placeholder="Email"><br>
        <input type="text" id="addressInput" placeholder="Address"><br>
        <button>Register</button>
    </body>
</html>
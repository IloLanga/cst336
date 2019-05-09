<?php
session_start();
//checks whether user has logged in
if (isset($_SESSION['adminName'])) {
    
    header('location: admin_panel.php'); //sends users to login screen if they haven't logged in
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
        <link rel="stylesheet" type="text/css" href="../css/signin.css">

    </head>
        
        <!--<p>Testing use: admin | secret</p>-->
        <!--<form method="POST" action="login_process.php">-->
        <!--    Username: <input type="text" name="username" id="username"/> <br/>-->
        <!--    Password: <input type="password" name="password" id="password"/> <br/>-->
        <!--    <input type="submit" value="Login!" >-->
        <!--</form>-->
        <!-- bootstrap testing start (Tested working) -->
        
        
    <body class="text-center">
    <div class="form-signin">
        <h1 class='title'>Admin Panel</h1>
            <form method="POST" action="login_process.php">
              <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              <div class="text-dark">user: admin | pass: secret</div>
              <label for="username" class="sr-only">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            <a class="strong" href="../index.php"> Home </a>
        </div>
    </body>
        
        
        
<!--<div class="container text-center">-->
<!--    <div class="d-flex justify-content-center align-items-center">                -->
<!--        		<div class="card">-->
<!--        			<div class="card-header">-->
<!--        				<h3>Sign In</h3>-->
<!--        			</div>-->
<!--        			<div class="card-body">-->
<!--        				<form method="POST" action="login_process.php">-->
<!--                            <div class="text-light">user: admin | pass: secret</div>-->
<!--        					<div class="input-group form-group">-->
<!--        						<div class="input-group-prepend">-->
<!--        							<span class="input-group-text"><fa name="user"></fa></span>-->
<!--                                </div>-->
                
<!--        						<input type="text" id="username" class="form-control" placeholder="username" name="username">-->
        
<!--        					</div>-->
<!--        					<div class="input-group form-group">-->
<!--        						<div class="input-group-prepend">-->
<!--        							<span class="input-group-text"><fa name="lock"></fa></span>-->
<!--        						</div>-->
<!--        						<input type="password" type="password" class="form-control" placeholder="password" name="password">-->
<!--        					</div>-->
<!--        					<div class="form-group">-->
<!--        					    <input type="submit" value="Sign in" >-->
<!--        					</div>-->
<!--        				</form>-->
<!--                    </div>-->
                    <!-- card body-->
<!--                </div>-->
                <!-- card -->
<!--          </div>-->
          <!-- flex -->
        
<!--        </div>-->
        <!-- container -->

        <!--bootstrap testing end -->
</html>
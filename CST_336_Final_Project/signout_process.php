<?php
session_start();
session_destroy();
header("Location: index.php"); //sends users to login screen if they haven't logged in
?>
<?php
session_start();
session_destroy();
header('location: admin_panel.php'); //sends users to login screen if they haven't logged in
?>
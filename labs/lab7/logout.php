<?php
session_start();

session_destroy();

header('location: login.html'); //taking user to login screen
?>
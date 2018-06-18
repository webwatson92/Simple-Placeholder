<?php
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');
require("vendor/autoload.php");


if(!empty($_COOKIE['name']) && !empty($_COOKIE['user_id'])){
     $_SESSION['name'] = $_COOKIE['name'];
     $_SESSION['user_id'] = $_COOKIE['user_id'];
     $_SESSION['avatar'] = $_COOKIE['avatar'];
}

auto_login();
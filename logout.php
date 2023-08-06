<?php

include 'config.php';

session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION_['loggedin'] != true)
// {
//     header('location:login.php');
// }

session_unset();
session_destroy();

header('location:index.php');

?>
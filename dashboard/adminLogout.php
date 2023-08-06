<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
echo ("<script LANGUAGE='JavaScript'>
    window.alert('You are logging out');
    window.location.href='/cinephile/login.php';
    </script>");


die;
<?php

session_start();
$_SESSION['success'] = "logout Successfully Done";
session_destroy();
header('location:signup.php');
exit;

?>
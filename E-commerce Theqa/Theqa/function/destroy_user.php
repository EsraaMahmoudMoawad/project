<?php
session_start();
include("connection.php");
$_SESSION['isLogin'] = false;
unset($_SESSION['userId']);
header('Location:../login.php');

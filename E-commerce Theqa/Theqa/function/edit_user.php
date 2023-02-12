<?php 
session_start();
if(isset($_POST['submit'])){
	include 'connection.php';
	$name = $_POST['user_name'];
	$id=$_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
    $update_admin = "UPDATE user SET name = '$username' , email=$email ,  password =$password , phone =$phone WHERE id =$_SESSION[userId]";





	
	header("location:../index.php");



}
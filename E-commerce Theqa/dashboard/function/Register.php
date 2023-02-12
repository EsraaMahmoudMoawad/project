<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];

	$select_admin = "INSERT INTO `user`(`id`, `name`, `email`, `phone`, `password`) 
    VALUES ('','$username','$email','$phone','$password')";

	$result_admin = $connection->query($select_admin);
	// $count = $result_admin->num_rows;

	header("location: ../../index.php");

}
?>
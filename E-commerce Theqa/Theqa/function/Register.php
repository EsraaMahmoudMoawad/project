<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$phone = $_POST['phone'];

	$pname = $_FILES["file"]["name"];
	$tname = $_FILES["file"]["tmp_name"];
	$uploads_dir = 'images';
	 move_uploaded_file($tname, $uploads_dir.'/'.$pname);
	
	// validation in email

	$select_query = "INSERT INTO `user`(`id`, `name`, `email`, `password`, `phone` , `img`) 
	VALUES ('','$name','$email','$password','$phone' , '$pname')";

	$result = $connection->query($select_query);
	   
	header("location:../login.php");

}
?>

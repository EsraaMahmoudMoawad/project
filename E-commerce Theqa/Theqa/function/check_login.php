<?php
if(isset($_POST['submit'])){
	include 'connection.php';
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	//clean data
function cleanData($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}

$email=cleanData($email);
$password=cleanData($password);

	$select_admin = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

	$result_admin = $connection->query($select_admin);
	$row = $result_admin->fetch_assoc();
	$count = $result_admin->num_rows;

	//echo $count;
	if ($count > 0 ){ 
		session_start();
		$_SESSION['is_login'] = true;
		$_SESSION['userId'] = $row['id'];
		$_SESSION['email'] = $email;

		header("location: ../index.php");
	}	
	else {
		header("location: ../login.php");
	}
}

?>
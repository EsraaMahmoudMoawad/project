<?php 
if(isset($_POST['submit'])){
    include 'connection.php';

    $name=$_POST['Full_Name'];
    $email=$_POST['email'];
    $text=$_POST['text'];
    $query="INSERT INTO `messages`(`id` , `name` ,`email`, `message`) 
    VALUES ('','$name','$email','$text')";
    $result = $connection->query($query);
    echo "<script>alert('Data has been inserted')</script>";
    header("Location:../index.php");
    echo "<script>alert('Data has been inserted')</script>";
}








?>
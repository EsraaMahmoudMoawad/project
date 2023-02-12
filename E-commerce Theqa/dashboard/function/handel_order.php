<?php
include 'connection.php';


if (isset($_GET['id_edit'])) {
    $id_edit = $_GET['id_edit'];

    $query = "SELECT * FROM `order_pro` WHERE order_info = $id_edit";
    $result = mysqli_query($connection, $query);
    $message = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r($message);
    // echo "<pre>";

    if ($message['is_reading'] == "not_reading") {

        $query = "SELECT `notification` FROM notifications ";
        $result = mysqli_query($connection, $query);
        $notification = mysqli_fetch_assoc($result);
        $notification = $notification['notification'];
        $notification--;


        $query = "UPDATE `notifications` SET `notification`='$notification' WHERE id= 1";
        $result = mysqli_query($connection, $query);

        $query = "UPDATE `messages` SET `is_reading`='reading' WHERE id= $id_edit";
        $result = mysqli_query($connection, $query);
    }
    header("Location: ../Order_Details.php?id_edit=$id_edit");
}
if (isset($_GET['id_delete'])) {
    $query = "DELETE FROM `order_pro` WHERE order_info = $_GET[id_delete]";
    $result = mysqli_query($connection, $query);

    $query2 = "DELETE FROM `orders` WHERE id = $_GET[id_delete]";
    $result2 = mysqli_query($connection, $query2);

    header("location: ../Order View.php");
}


?>

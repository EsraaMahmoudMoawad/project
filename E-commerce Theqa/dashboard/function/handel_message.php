<?php
include 'connection.php';


if (isset($_GET['id_edit'])) {
    $id_edit = $_GET['id_edit'];

    $query = "SELECT * FROM messages WHERE id = $id_edit";
    $result = mysqli_query($connection, $query);
    $message = mysqli_fetch_assoc($result);
   
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
    header("Location: ../messageDetails.php?id_edit=$id_edit");
}
if (isset($_GET['id_delete'])) {
    $query = "DELETE FROM messages WHERE id = $_GET[id_delete]";
    $result = mysqli_query($connection, $query);
    header("location: ../messageView.php");
}
?>

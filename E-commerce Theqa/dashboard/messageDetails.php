<?php

include 'des_include/header.php';
include 'des_include/nav.php';
include 'des_include/sidebar.php';



$id_edit = $_GET['id_edit'];
$query="SELECT * FROM `messages` WHERE id = $id_edit ";

$select_query=$connection->query($query);
foreach ($select_query as $KEY) {
    $id = $KEY['id'];
    $name = $KEY['name'];
    $email = $KEY['email'];
    $message=$KEY['message'];
}

?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Message Details</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Message Details</h1>
        </div>

        <form method="POST" action="function/edit_product.php" enctype="multipart/form-data">
            <label>User Name:</label>
            <input readonly type="text" value="<?= $name ?>" class="form-control">
            <label>User Email:</label>
            <input readonly type="text" value="<?= $email ?>" class="form-control">

            <label>Message:</label>
            <textarea readonly class="form-control"><?= $message  ?></textarea>

        </form>

    </div>
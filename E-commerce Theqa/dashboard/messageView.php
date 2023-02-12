<?php
// include 'function/connection.php';
include "des_include/header.php";
include "des_include/nav.php";
include "des_include/sidebar.php";
$index = 1;

$query = "SELECT * FROM messages ";
$result = mysqli_query($connection, $query);
$messages = mysqli_fetch_all($result);
?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main m-auto w-50">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Messages</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Messages</h1>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message) { ?>
                    

                    <tr  <?php if($message[3] == "not_reading"){echo "class='text-danger'";}?>>
                        <th scope="row"><?= $index ?></th>
                        <td scope="row" ><?= $message[1] ?></td>

                        <td>

                            <!-- Button trigger modal -->
                            <a href="function/handel_message.php?id_edit=<?= $message[0] ?>">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $key_cat['id']; ?>">
                                    Open
                                </button>
                            </a>
                            <a href="function/handel_message.php?id_delete=<?= $message[0] ?>">
                                <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal<?php echo $key_cat['id']; ?>">
                                    Delete
                                </button>
                            </a>


                        </td>
                    </tr>

                <?php $index++;
                } ?>


            </tbody>
        </table>

    </div>
    <!--/.row-->
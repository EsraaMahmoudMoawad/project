<?php

$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DB_NAME="db_theqa";


$connection =  new mysqli($SERVERNAME, $USERNAME , $PASSWORD , $DB_NAME);
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



<?php

include '../connection.php';
$id= $_GET['receiver_id'];

$status = $_GET['status'];




$query = "UPDATE `request _received` SET `status`='$status' WHERE `receiver_id`='$id'";


mysqli_query($conn,$query);
header('location:index.php');

?>
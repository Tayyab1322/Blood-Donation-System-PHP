<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Retrieve the POST data
 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../login.php");
    exit;
}





$longitude = $_POST['long'];
$latitude = $_POST['lat'];
$accuracy = $_POST['accuracy'];

// $timestamp = $_POST['timestamp'];
$donor_id = $_SESSION['donor_id'];




// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!empty($_POST['lat'])){
    $sql = "UPDATE `donor_info` SET `latitude`='$latitude',`longitude`='$longitude',`accuracy`='$accuracy' WHERE `donor_id` = '$donor_id'";
    $conn->query($sql);

// Close the database connection
$conn->close();

}

    
   

?>

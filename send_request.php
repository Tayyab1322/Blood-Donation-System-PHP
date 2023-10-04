<?php

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $receiverid = $_SESSION['receiverid'];
    $receivername = $_SESSION['receivername'];
    $receiveremail = $_SESSION['receiveremail'];
    $receiverphone = $_SESSION['receiverphone'];

   

  
    // $receiverid = $_SESSION['receiverid'];
    // $receiverid = $_SESSION['receiverid'];


    
    
   
    $donor_id = $_POST["donor_id"];
 
  

   

    
    
    
    $query= "INSERT INTO `request _received`(`donor_id`, `receiver_id`, `receiver_name`, `receiver_email`, `receiver_phone`) VALUES ('$donor_id','$receiverid','$receivername','$receiveremail','$receiverphone')";
    
    $result = mysqli_query($conn,$query);

    if($result>0){
    echo
                "
                <script>
                window.alert('successfuly send request to donor');
               
                document.location.href = 'request_blood.php';
                </script>
                
                ";
               
         } else{
            "<script>window.alert('not send request');
            document.location.href = 'request_blood.php';
            </script>";
         }
 
     }  

        
        
    
    
   

    




?>





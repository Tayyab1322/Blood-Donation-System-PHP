<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>



<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script defer src="./js/receivervalidation.js"></script>
        <title>Realtime location tracker</title>
        

        <!-- leaflet css  -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

        
    </head>

    <body class="request_result">
      <?php include('header.php');?>
      <div class="container">
      <main>
        
<?php

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // $name= $_POST["name"];
    // $name = $_POST["name"];
   
    $accuracy = $_POST["accuracy"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $receiver_email = $_POST["receiver_email"];
    $receiver_name = $_POST["receiver_name"];
    $blood_group = $_POST['blood_group'];
    $receiver_phone = $_POST['receiver_phone'];

    

    // $password = $_POST['password'];
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // $random_id = rand(1000, 9999);
    $receiverid = ($receiver_name . rand(1000,9999));
    $sql= "SELECT * FROM `donor_info` WHERE bgroup = '$blood_group'";

    $result = $conn->query($sql);
    
    
    
    $query= "INSERT INTO `receiver_info`(`receiverid`, `receiver_name`, `receiver_email`, `bgroup`, `latitude`, `longitude`, `accuracy`, `phone`) VALUES ('$receiverid','$receiver_name','$receiver_email','$blood_group','$latitude','$longitude','$accuracy','$receiver_phone')";

    $mysql= "SELECT * FROM `receiver_info` WHERE receiverid = '$receiverid'";

    mysqli_query($conn,$query);
    $select = $conn->query($mysql);
    
  
    if(mysqli_num_rows($result) > 0){


      while($row = mysqli_fetch_assoc($result)){
        $_SESSION['d_lat'] = $row['latitude'];

        if(mysqli_num_rows($select) > 0){
       
        while($rows = mysqli_fetch_assoc($select)){
          // session_start();
          // $_SESSION['loggedin'] = true;
          $_SESSION['receiverid'] = $rows['receiverid'];
          $_SESSION['receivername'] = $rows['receiver_name'];
          $_SESSION['receiveremail'] = $rows['receiver_email'];
          $_SESSION['receiverphone'] = $rows['phone'];
          $_SESSION['receiverlatitude'] = $rows['latitude'];
          $_SESSION['receiverlongitude'] = $rows['longitude'];






        }
        
        }
      ?>
        <div class="card box">

        
          <div class="donor_heading">
            Donor Details
          </div>
          
          
          <div class="image">
            <img src="./images/newuser.jpg" alt="" class="colorize"srcset="">
          </div>
          
          <div class="caption">
            
             <p class="donor_id"><strong>Donor ID: </strong> <?php echo $row["donor_id"];?></p>
            


             <!-- <p id="cal_distance">sdfsd</p> -->
            <p class="donor_name"><strong>Donor Name: </strong> <?php echo $row["name"];?></p>
            <p class="donor_email"><strong>Donor Email: </strong><?php echo $row["email"];?></p>
            <p class="blood_group"><strong>Donor Blood: </strong><?php echo $row["bgroup"];?></p>
            
            <form id="df" action="send_request.php" method="POST"  >
            
          <input type="hidden" name="donor_lat" id="d_lat" value="<?php echo $row["latitude"];?>">
          <input type="hidden" name="donor_lon" id="d_lon" value="<?php echo $row["longitude"];?>">
          <input type="hidden" name="r_lat" id="r_lat" value="<?php echo $_SESSION['receiverlatitude'];?>">
          <input type="hidden" name="r_lon" id="r_lon" value="<?php echo $_SESSION['receiverlongitude'];?>">


            


           <!-- Hidden Inputs -->
            <input type="hidden" name="donor_name" value="<?php echo $row["name"];?>">
            <p class="latitude hide_p">Latitude: <?php echo $row["latitude"];?></p>
            <p class="longitude hide_p">Longitude: <?php echo $row["longitude"];?></p>
            <p class="accuracy hide_p">Accuracy: <?php echo $row["accuracy"];?></p>
            <p class="blood_group hide_p " id="r_lat"><strong>receiverlatitude: </strong><?php echo $_SESSION['receiverlatitude'];?></p>
            <p class="blood_group hide_p " id="r_long"><strong>receiverlongitude: </strong><?php echo $_SESSION['receiverlongitude'];?></p>
            <p class="blood_group hide_p " id="d_lat"><strong>donorlatitude: </strong> <?php echo $row["latitude"];?></p>
            <p class="blood_group  hide_p" id="d_long"><strong>donorlongitude: </strong> <?php echo $row["longitude"];?></p>
            
          
            
           
         
          <input type="hidden" name="donor_id" id="donor_id" value="<?php echo $row["donor_id"];?>">


      
          
           <button class="button" type ='submit' class="text-center " ><span>Request for Blood </span></button>
           
       </form>
       <!-- <button onclick="myFunction()">Click me</button> -->
         
            

          </div>
         
          <br>
          

          <!-- <button class="Request_blood">Request for Blood</button> -->
         
        </div>
        <?php
        
      }}
      else{
        echo '<div class="card">

        
          <div class="donor_heading">
            Donor Details
          </div>
          
          
          <div class="image">
            <img src="./images/newuser.jpg" alt="" class="colorize"srcset="">
          </div>
          
          <div class="caption">
          
          
       
            <p class="blood_group">There is no Blood Donor in Our Records </p>
           
            
           
            

          </div>
          <br>

          <!-- <button class="Request_blood">Request for Blood</button> -->
          <button class="button"><span>Research Again </span></button>
        </div>';
    }}?>
      </main>
      </div>
      

      <!-- <?php include('footer.php');?> -->
    
    </body>

   
    </html>

    <script>


            function myFunction(){
        // Your function call here
                
            var z = document.getElementById("cal_distance");
                // // Convert latitude and longitude to radians
             var x = document.getElementById("d_lat");
             var lat1 = x.value;
             var x = document.getElementById("d_lon");
             var lon1 = x.value;
             var x = document.getElementById("r_lat");
             var lat2 = x.value;
             var x = document.getElementById("r_lon");
             var lon2 = x.value;
            const earthRadius = 6371; 
            // Radius of the Earth in kilometers

 

            const latRad1 = degToRad(lat1);
            const lonRad1 = degToRad(lon1);
            const latRad2 = degToRad(lat2);
            const lonRad2 = degToRad(lon2);
           



            // Calculate the differences between the latitudes and longitudes
            const latDiff = latRad2 - latRad1;
            const lonDiff = lonRad2 - lonRad1;

            // alert(lonDiff);

            // // Apply the Haversine formula
            const a =
              Math.sin(latDiff / 2) ** 2 +
              Math.cos(latRad1) * Math.cos(latRad2) * Math.sin(lonDiff / 2) ** 2;
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

              // alert ();

            // // Calculate the distance
            const distance = earthRadius * c;
            // z.value=distance;
            z.textContent= distance;
            // alert (distance);
             
          
      };
      function degToRad(degrees) {
          return (degrees * Math.PI) / 180;
}
    </script>

  
























    <!-- leaflet js  -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Map initialization 
        var map = L.map('map').setView([14.0860746, 100.608406], 6);

        //osm layer
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        if(!navigator.geolocation) {
            console.log("Your browser doesn't support geolocation feature!")
        } else {
            setInterval(() => {
                navigator.geolocation.getCurrentPosition(getPosition)
            }, 5000);
        }

        var marker, circle;

        function getPosition(position){
            // console.log(position)
            var lat = position.coords.latitude
            var long = position.coords.longitude
            var accuracy = position.coords.accuracy
            var x = document.getElementById("latitude")
            x.value = lat
            var x = document.getElementById("longitude")
            x.value = long
            var x = document.getElementById("accuracy")
            x.value = accuracy

            if(marker) {
                map.removeLayer(marker)
            }

            if(circle) {
                map.removeLayer(circle)
            }

            marker = L.marker([lat, long])
            circle = L.circle([lat, long], {radius: accuracy})

            var featureGroup = L.featureGroup([marker, circle]).addTo(map)

            map.fitBounds(featureGroup.getBounds())

            console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)
            
        // Create a new XMLHttpRequest object
                const xhr = new XMLHttpRequest();

            // Define the request parameters
            xhr.open("POST", "conn.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Send the request with the value as a parameter
            xhr.send("value=" + encodeURIComponent(lat));
        }

    </script>

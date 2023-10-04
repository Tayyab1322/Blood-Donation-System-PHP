<?php

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // $name= $_POST["name"];
    // $name = $_POST["name"];
   
    $accuracy = $_POST["accuracy"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $donor_email = $_POST["donor_email"];
    $donor_name = $_POST["donor_name"];
    $blood_group = $_POST['blood_group'];
    // $password = md5($_POST['password']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   


    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // $random_id = rand(1000, 9999);
    $donorid = ($donor_name . rand(1000,9999));

   

    
    
    
    $query= "INSERT INTO `donor_info`(`donor_id`, `name`, `email`, `bgroup`, `password`, `latitude`, `longitude`, `accuracy`) VALUES ('$donorid','$donor_name','$donor_email','$blood_group','$password','$latitude','$longitude','$accuracy')";
    
    mysqli_query($conn,$query);
    echo
                "
                <script>
               
                document.location.href = 'login.php';
                </script>
                
                ";
               
          
 
       

        
        
    } 
    
   

    




?>


<!-- <!DOCTYPE html> -->
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

        <style>
            body {
                margin: 0;
                padding: 0;
            }

            #map {
                width: 100%;
                height: 20vh;
            }
        </style>
    </head>

    <body class="registration"><?php include('header.php');?>

    <div class="input-control" id="lat_long">
                <label for="Your Live Location">Your Live Location</label>
                <div id="map"></div><br>
                <input type="number" name="latitude" id="latitude" step="0.000000000000001">
                <input type="number" name="longitude" id="longitude" step="0.00000000000001">
                <input type="number" name="accuracy" id="accuracy" step="0.00000000000001">
                </div>
    
        
        <?php include('footer.php');?>
    </body>

    
    </html>

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
            }, 30000);
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
            // var timestamp = ;
            var timestamp = new Date().toISOString();

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
            xhr.send('timestamp=' + timestamp + '&long=' + long + '&lat=' + lat );
            location.reload();
        }

    </script>


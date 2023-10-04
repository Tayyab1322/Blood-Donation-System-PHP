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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<body><?php include('header.php');?>







    

    <div id="donor_details">
    <input type="text" name="" id="">
    <body class="registration"><?php include('header.php');?>
    <label for="latitude" id="latitude">latitude</label>
    <input value= "<?php echo $_SESSION['latitude']?>"><br>
    <label for="longitude" id="longitude">longitude</label>
    <input value= "<?php echo $_SESSION['longitude']?>"><br>
    <label for="accuracy">accuracy</label>
    <input value= "<?php echo $_SESSION['accuracy']?>"><br>
    <label for="name" id="name">name</label>
    <input value= "<?php echo $_SESSION['name']?>"><br>
    <label for="email" id="email">email</label>
    <input value= "<?php echo $_SESSION['email']?>"><br>
    <label for="donor_id" id="donor_id">donor_id</label>
    <input value= "<?php echo $_SESSION['donor_id']?>"><br>
    <label for="bgroup" id="bgroup">bgroup</label>
    <input value= "<?php echo $_SESSION['bgroup']?>"><br>
    </div>




    
    <!-- <h1> <center> Welcome <?php echo ($_SESSION['donor_email']);  ?></h1> -->


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
            // location.reload();
        }

    </script>



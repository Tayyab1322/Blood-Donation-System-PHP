
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script defer src="./js/donorvalidation.js"></script>
        <title>Blood Donation</title>
        

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

    <div class="container" >
            
            <form id="form" action="donor_registration.php" method="POST"  >
                <h1>Register as Donor</h1>
                <div class="input-control">
                    <label for="donor_name">Full Name</label>
                    <input id="donor_name" name="donor_name" type="text">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="donor_email">Email</label>
                    <input id="donor_email" name="donor_email" type="text">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                <label for="blood_group">Choose an Option:</label>
                <select name="blood_group" id="blood_group" required>
                        <option value="" disabled selected>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                </select>
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password">Password</label>
                    <input id="password"name="password" type="password">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password2">Password again</label>
                    <input id="password2"name="password2" type="password">
                    <div class="error"></div>
                </div>
                
                <div class="input-control" id="lat_long" class="mydata">
                
                <input type="number" name="latitude" id="latitude" step="0.000000000000001">
                <input type="number" name="longitude" id="longitude" step="0.00000000000001">
                <input type="number" name="accuracy" id="accuracy" step="0.00000000000001">
                </div>
                <!-- <label for="">Your Live Location</label>
                <div id="map"></div><br> -->
                
                <button type="submit">Sign Up</button>
                
              
            </form>
            
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

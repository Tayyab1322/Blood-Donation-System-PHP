
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Blood donation</title>

    <!-- leaflet css  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            width: 50%;
            height: 50vh;
        }
    </style>
</head>

<body>
    <?php include('header.php');?>
    <!-- <div id="map"></div><br> -->
    <!-- <form action="" class="myForm" method="post" autocomplete="off">
        
    <input type="number" name="latitude" id="latitude" step="0.000000000000001">
    <input type="number" name="longitude" id="longitude" step="0.00000000000001">
    <input type="number" name="accuracy" id="accuracy" step="0.00000000000001">
    <button   type="submit" name="submit" id="get" >Get Location</button>
    </form> -->
    <section class="home">

<div class="content">
    <h3>Real Time Online Blood <br>Donation System</h3>
    <p>Give blood, save lives: our real-time system makes it easy.</p>
    <!-- <a href="about.php" class="white-btn"> Load More</a> -->
</div>

</section>
    <div class="main">
      <div class="left-div">
        <h2>Why you need to Donate Blood?</h2>
        <p>Donating blood is a simple and safe process that can save lives. It's a way to give back to your community and help someone in need. Regular blood donations are always needed to ensure that hospitals and clinics have enough blood for patients. Plus, donating blood can have health benefits for the donor, such as reducing the risk of heart disease. Consider donating blood today to make a difference in someone's life.</p>
      </div>
      <div class="right-div">
        <img src="./images/doctor.jpg" alt="Image">
      </div>
    </div>
    <div class="about">
      <h2>About Us</h2>
      <p>Our mission is to help save lives by connecting blood donors with people in need of blood transfusions in real-time. We believe that technology can play a vital role in addressing the persistent challenge of blood shortages and ensuring that everyone has access to life-saving blood when they need it.</p>
    </div>
    
    <script src="script.js"></script>
   

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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

   <!-- leaflet js  -->
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Map initialization 
        var x = document.getElementById("donor_id");
        var donor_id = x.value;
        
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
            }, 15000);
        }

        var marker, circle;

        function getPosition(position){
            // console.log(position)
            var lat = position.coords.latitude
            var long = position.coords.longitude
            var accuracy = position.coords.accuracy
            
            // x.value = accuracy
            // var timestamp = ;
            // var timestamp = new Date().toISOString();

            if(marker) {
                map.removeLayer(marker)
            }

            if(circle) {
                map.removeLayer(circle)
            }

            marker = L.marker([lat, long])
            circle = L.circle([lat, long], {radius: accuracy})

            var featureGroup = L.featureGroup([marker,   circle]).addTo(map)

            map.fitBounds(featureGroup.getBounds())

            console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)
            
            
        // Create a new XMLHttpRequest object
                const xhr = new XMLHttpRequest();
            
            // Define the request parameters
            xhr.open("POST", "../conn.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Send the request with the value as a parameter
            xhr.send('accuracy=' + accuracy + '&donor_id=' + donor_id + '&long=' + long + '&lat=' + lat );
            // location.reload();
        }

    </script>

    <script>
       function variationDelete(receiverId) {
        $.ajax({
            url: 'status.php',
            method: 'GET',
            data: { receiver_id: receiverId },
            success: function(response) {
            // Handle the response from the server
            console.log(response);
            },
            error: function(xhr, status, error) {
            // Handle the error
            console.error(error);
            }
        });
}
    </script>
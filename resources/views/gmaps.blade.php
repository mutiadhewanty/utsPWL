

<html>
    <head>
    <title>{{ $tittle }}</title>

    <style type="text/css">
    /* Set the size of the div element that contains the map */
    #map {
        height: 100%;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
    </style>
    </head>
    <body>
    
    <div id="map"></div>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const Bakso_President = { lat: -7.962522, lng: 112.6370783};
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 20,
          center: Bakso_President,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: Bakso_President,
          map: map,
        });
      }
    </script>
     
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaVMyx-tbUzSR15XnIHukV0dMhPMUc6zA&callback=initMap">
</script>
    </body>
</html> 

    
                       
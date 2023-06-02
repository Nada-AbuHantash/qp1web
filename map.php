<?php
session_start();
if (isset($_GET['store_name']) &&isset($_GET['latitude'])&&isset($_GET['longitude']) ){
    $store_name=$_GET['store_name'];
$markt=$_SESSION['market'];
    $latitude=$_GET['latitude'];
    $longitude=$_GET['longitude'];

    try{
        $db=new mysqli('localhost', 'root', '', 'gp01');
        // UPDATE `sellers` SET `xlocation` = '".$store_name."', `ylocation` = '".$latitude."' WHERE <condition>;

        $qryStr=" UPDATE`sellers` SET `xlocation`='".$latitude."', `ylocation`= '".$longitude."' WHERE suparmarketname='".$store_name."';";
        $db->query($qryStr);
        $db->commit();
        $db->close();
    }catch (Exception $e){
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SALE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <style>
    /* Optional: Makes the sample page fill the window. */

 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
    }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent" style="background-color:rgba(168, 216, 205);">
    <div class="container d-flex align-items-center justify-content-between position-relative" >

      <div class="logo" >
        <h1 class="text-light"><a href="index.html"><span>SALE</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
      <li><a href="homePage2.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="homePage.php">Your Products</a></li>
          <li><a href="addProducts.php">Add Products</a></li>
          <li><a href="sellerprofit.php">Profits</a></li>
          <li><a href="map.php">Market Location</a></li>
          <i class="bi bi-list mobile-nav-toggle"></i>
          <form method="post" action="index.html">
        <input  type="submit"  value="Sign Out " name="delete" class="active " style="background-color:rgba(168, 216, 205);color: white;font-weight: bold;border: none;margin-left: 6px;font-size: 13px">
          </form>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


  </div>
</header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
        
          <div id="map" style="height: 500px"></div>

          </div>

          <div class="col-lg-6">
            <form  method="get" role="form" class="myform" action="map.php">
           
              <div class="form-group mt-3">
              <input type="text" id="store_name" name="store_name"class="form-control" placeholder="Your supermarket name.." value="<?php  echo $_SESSION['market']; ?>" >
              </div>
              <div class="form-group mt-3">
              <input type="text" id="latitude" name="latitude" placeholder="Your lat.." class="form-control">
              </div>
              <div class="form-group mt-3">
              <input type="text" id="longitude" name="longitude" placeholder="Your lng.." class="form-control">
              </div>
        
              <style>
                        .text-center input[type="submit"] {
                         
                            border-radius: 20px; /* Adjust the value to change the roundness of the button */
                            /* Add any other desired styles */
                        }
                    </style>
              <div class="text-center form-group mt-3 "> <input type="submit" value="Sign In" name="login" style="color:#FFFFFF; background-color: #205C8F ; padding: 5px"; ></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

   












    <script>
        var map, infoWindow;
        var geocoder;
        function initMap() {

            // Display a map on the page
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -33.865143, lng: 151.209900},
                mapTypeId: 'roadmap',
                zoom: 10
            });

            map.setTilt(45);

            // Try HTML5 geolocation to get location
              infoWindow = new google.maps.InfoWindow;
              geocoder = new google.maps.Geocoder;
            // var  input = document.getElementById('pac-input');

            // var autocomplete = new google.maps.places.Autocomplete(
            //     input, {place_id: true});
            //     autocomplete.bindTo('bounds', map);


//
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        draggable: true,
                        title: 'Your position'
                    });
                    /*infoWindow.setPosition(pos);
                    infoWindow.setContent('Your position');
                    marker.addListener('click', function() {
                      infoWindow.open(map, marker);
                    });
                    infoWindow.open(map, marker);*/
                    map.setCenter(pos);

                    updateMarkerPosition(marker.getPosition());
                    // geocodePosition(pos);

                    // Add dragging event listeners.
                    // google.maps.event.addListener(marker, 'dragstart', function() {
                    //     updateMarkerAddress('Dragging...');
                    // });

                    google.maps.event.addListener(marker, 'drag', function() {
                        updateMarkerStatus('Dragging...');
                        updateMarkerPosition(marker.getPosition());
                    });

                    google.maps.event.addListener(marker, 'dragend', function() {
                        updateMarkerStatus('Drag ended');
                        // geocodePosition(marker.getPosition());
                        map.panTo(marker.getPosition());
                    });

                    google.maps.event.addListener(map, 'click', function(e) {
                        updateMarkerPosition(e.latLng);
                        // geocodePosition(marker.getPosition());
                        marker.setPosition(e.latLng);
                        map.panTo(marker.getPosition());
                    });

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }

            //
            // autocomplete.addListener('place_changed', function () {
            //     var place = autocomplete.getPlace();

            //     if (!place.place_id) {
            //         return;
            //     }
            //     geocoder.geocode({'placeId': place.place_id}, function (results, status) {

            //         if (status !== 'OK') {
            //             window.alert('Geocoder failed due to: ' + status);
            //             return;
            //         }
            //         map.setZoom(10);
            //         map.setCenter(results[0].geometry.location);
            //         // Set the position of the marker using the place ID and location.

            //     });
            // });
        }

        //
        // function geocodePosition(pos) {
        //     geocoder.geocode({
        //         latLng: pos
        //     }, function(responses) {
        //         if (responses && responses.length > 0) {
        //             updateMarkerAddress(responses[0].formatted_address);
        //         } else {
        //             updateMarkerAddress('Cannot determine address at this location.');
        //         }
        //     });
        // }
        function updateMarkerStatus(str) {
          //  document.getElementById('markerStatus').innerHTML = str;
        }
        function updateMarkerPosition(latLng) {
            $("#latitude").val(latLng.lat());
            $("#longitude").val(latLng.lng());

        }
        // function updateMarkerAddress(str) {
        //     $("#address").val(str);
        // }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHjyfgOLqX87aolocg9uOqhFTXEb8_LpU&libraries=places&callback=initMap"
            async defer></script>















  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
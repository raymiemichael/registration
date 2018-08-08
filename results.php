<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/plugins/Recaptcha.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>

    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=AIzaSyC79lkAUVouxfJA-9wo4YVS1koj2MMrjnY&callback=initMap">
    </script>

    <style>
        body {
            background-color: aliceblue;
        }

        h1 {
            font-size: 40px;
            font-family: 'Arima Madurai', cursive;
        }

        h2 {
            font-size: 29px;
            font-family: 'Arima Madurai', cursive;
            font-style: italic;
        }

        h3 {
            font-size: 23px;
            font-family: 'BenchNine', sans-serif;
            color: grey;
        }

        h5 {
            font-size: 23px;
            font-family: 'BenchNine', sans-serif;
            color: black;
        }

        h4 {
            font-size: 23px;
            font-family: 'BenchNine', sans-serif;
        }

        #map {
            width: 500px;
            height: 300px;
            background-color: grey;
            margin-left: 80px;
            margin-right: 30px;
        }

        #map_canvas {
            height: 100%;
            width: 100%;
        }

        #map img {
            max-width: none !important;
        }

    </style>
</head>
<body>


<div class="container">
    <br>
    <h1 class="text-center">Results Verification Page Raymie Michael</h1>

    <div class="row justify-content-center">
        <div class="shadow p-3 mb-5 bg-white rounded" style="width: inherit">

            <div class="media-container-column col-lg-12">
                <h3>Name</h3>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <h5><?php
                        $firstname = $_POST['firstname'];
                        echo($firstname);
                    ?></h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $lastname = $_POST['lastname'];
                        echo($lastname);
                    ?></h5>
                    </div>
                </div>

                <hr>

                <h3>Address</h3>
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $address = $_POST['address'];
                        echo($address);
                    ?></h5>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $city = $_POST['city'];
                        echo($city);
                    ?></h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $state = $_POST['state'];
                        echo($state);
                    ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $zipcode = $_POST['zipcode'];
                        echo($zipcode);
                    ?></h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $country = $_POST['country'];
                        echo($country);
                    ?></h5>
                    </div>
                    <div id="map"></div>

                </div>
                <br>
                <hr>

                <h3>Personal Information</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $education = $_POST['education'];
                        echo($education);
                    ?></h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $income = $_POST['income'];
                        echo($income);
                    ?></h5>
                    </div>
                </div>
                <hr>

                <h3>Contact</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $phone = $_POST['phone'];
                        echo($phone);
                    ?></h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $email = $_POST['email'];
                        echo($email);
                    ?></h5>
                    </div>
                </div>
                <hr>

                <h3>Password</h3>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5><?php
                        $password = $_POST['password'];
                        echo($password);
                    ?></h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5> <?php
                        $password = $_POST['confirmpassword'];
                        echo($confirmpassword);
                    ?></h5>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<script>

    var geocoder;
    var map;
    var address = "<?php echo $address. "
    ". $city. ", ". $state. "
    ". $zipcode. "
    ". $country ?>";

    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var myOptions = {
            zoom: 13,
            center: latlng,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);
        if (geocoder) {
            geocoder.geocode({
                'address': address
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                        map.setCenter(results[0].geometry.location);

                        var infowindow = new google.maps.InfoWindow({
                            content: '<b>' + address + '</b>',
                            size: new google.maps.Size(150, 50)
                        });

                        var marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            title: address
                        });
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });

                    } else {
                        alert("No results found");
                    }
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);


</script>
</body>


</html>
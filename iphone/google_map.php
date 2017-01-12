<!DOCTYPE html>
<html lang="en">

<!--Diffculties with the google map custom markets
    Map positioning issue
-->

<div data-role="page" data-ajax="true">

    <head>

        <?php include 'jquery_loading.php'; ?>


        <style>

            #mypanel {
                background: #396E9B;
            }

            [data-role="header"] {
                background: #ffffff;
            }

            #btn1, #btn2, #btn3, #btn4, #btn5, #btn6, #btn7, #btn8, #btn9 {
                background: #ffffff;
                text-align: left;
                padding-left: 25%;
                /*color:#396E9B;*/
            }

            .ui-content {
                background: #ffffff;
            }

            #navbtn {
                margin-left: 2%;

            }

            h1 {
                color: #396E9B;

            }

            #u_image {
                margin-left: 30%;
                width: 40%;
                height: 40%;
            }

            #name {
                color: #ffffff;
                font-weight: normal;

            }

            hr {
                margin-bottom: 6%;
                margin-top: 6%;
            }

            #backtbn {

                margin-left: 2%;
                background: #ffffff;
            }

            #footer {
                background: #ffffff;
            }

            #get_direction {
                background: #396E9B;
                color: #ffffff;
                text-shadow: none;

                margin-left: 5px;
            }

            #mylocation {
                background: #396E9B;
                color: #ffffff;
                font-weight: 500;
                margin-left: 5px;
                border-radius: 5px;;
                padding: 2px;
            }

            #map-canvas {
                width: 100%;
                height: 100%;
                padding: 0;
            }

            @media screen and (max-width: 450px){

                #footer{

                    margin-left: 106px;

                }

            }

        </style>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <!--        <a href="main_menu.php"-->
        <!--           class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"-->
        <!--           id="backtbn">Search</a>-->
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn" data-rel="back">Search</a>
        <h1>Game Locations</h1>

    </div>


    <div role="main" class="ui-content" id="map-canvas">

        <div id="map" style="width:100%;height:100%"></div>

        <script>

            (function() {

                window.onload = function() {

                    var json = '';
                    var u_email = 'pubudujayasanka@gmail.com';

                    var arr = {user_email: u_email};

                    if (u_email == '' ) {
                        alert("Please fill");
                    }
                    else {

                        $.ajax({
                            url: 'http://travelsmartwebapp.azurewebsites.net/ux_ui_backend/index.php/place_controller/get_unlock_places',
                            type: 'POST',
                            data: JSON.stringify(arr),
                            contentType: 'application/json; charset=utf-8',
                            dataType: 'json',
                            async: false,
                            success: function (response) {

                                var json = response ;


                                // Creating a new map
                                var map = new google.maps.Map(document.getElementById("map"), {
                                    center: new google.maps.LatLng(6.9271, 79.8612),
                                    zoom: 12,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                });

                                // my location
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function(position) {
                                        var pos = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude
                                        };

                                        infoWindow.setPosition(pos);
                                        infoWindow.setContent('Location found.');
                                        map.setCenter(pos);

                                   //     var image = 'images/male.png';
                                        var marker = new google.maps.Marker({
                                            position: pos,
                                            map: map,
                                            title: 'My Location',
                                            icon: '../images/male.png',
                                            lable:'M'
                                        });

                                        var cityCircle = new google.maps.Circle({
                                            strokeColor: '#74B4DE',
                                            strokeOpacity: 0.8,
                                            strokeWeight: 2,
                                            fillColor: '#B1DAF6',
                                            fillOpacity: 0.35,
                                            map: map,
                                            center: pos,
                                            radius: 16090
                                        });

                                        cityCircle.setMap(map);

                                    }, function() {
                                        handleLocationError(true, infoWindow, map.getCenter());
                                    });
                                } else {
                                    // Browser doesn't support Geolocation
                                    handleLocationError(false, infoWindow, map.getCenter());
                                }



                                var infoWindow = new google.maps.InfoWindow();

                                // Looping through the JSON data
                                for (var i = 0, length = json.length; i < length; i++) {

                                    var data = json[i],
                                        latLng = new google.maps.LatLng(data.place_lat, data.place_lng);

                                    // Creating a marker and putting it on the map
                                    var marker = new google.maps.Marker({
                                        position: latLng,
                                        map: map,
                                        title: data.place_name,
                                        icon:'../images/unlock_place.png'
                                    });

                                    // Creating a closure to retain the correct data, notice how I pass the current data in the loop into the closure (marker, data)
                                    (function(marker, data) {

                                        // Attaching a click event to the current marker
                                        google.maps.event.addListener(marker, "click", function(e) {
                                            infoWindow.setContent(data.place_name);
                                            infoWindow.open(map, marker);

//                                           var url = "game.php?place_id=" + encodeURIComponent(data.place_name) + ");
                                            window.location.href = "http://localhost/travel_smart/ipad/game.php?place_id=" + data.place_id;

                                        });


                                    })(marker, data);

                                }
                            }
                        });
                    }

                }

            })();

        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUcfy63PwH2s6OfUECunkH5Xa3ezlZ25Q&callback=myMap"></script>
    </div>


    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">
        <a href="#"
           class="ui-btn ui-shadow ui-icon-navigation ui-btn-icon-notext "
           id="mylocation" data-theme="e">Search</a>

        <a href="main_menu.php" data-role="button" id="get_direction" data-theme="e">Get Direction</a>

    </div>
    </body>

</div>
</html>
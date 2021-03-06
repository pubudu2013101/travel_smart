<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!--<div data-role="page" id="map-page" data-url="map-page" data-ajax="true">-->
<!---->
<!--    --><?php //include 'panel.php'; ?>
<!---->
<!--    <head>-->
<!---->
<!--        --><?php //include 'jquery_loading.php'; ?>
<!---->
<!--        <script>-->
<!---->
<!--            $( document ).on( "pageinit", "#map-page", function() {-->
<!--                var defaultLatLng = new google.maps.LatLng(34.0983425, -118.3267434);  // Default to Hollywood, CA when no geolocation support-->
<!--                if ( navigator.geolocation ) {-->
<!--                    function success(pos) {-->
<!--                        // Location found, show map with these coordinates-->
<!--                        drawMap(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));-->
<!--                    }-->
<!--                    function fail(error) {-->
<!--                        drawMap(defaultLatLng);  // Failed to find location, show default map-->
<!--                    }-->
<!--                    // Find the users current position.  Cache the location for 5 minutes, timeout after 6 seconds-->
<!--                    navigator.geolocation.getCurrentPosition(success, fail, {maximumAge: 500000, enableHighAccuracy:true, timeout: 6000});-->
<!--                } else {-->
<!--                    drawMap(defaultLatLng);  // No geolocation support, show default map-->
<!--                }-->
<!--                function drawMap(latlng) {-->
<!--                    var myOptions = {-->
<!--                        zoom: 10,-->
<!--                        center: latlng,-->
<!--                        mapTypeId: google.maps.MapTypeId.ROADMAP-->
<!--                    };-->
<!--                    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);-->
<!--                    // Add an overlay to the map of current lat/lng-->
<!--                    var marker = new google.maps.Marker({-->
<!--                        position: latlng,-->
<!--                        map: map,-->
<!--                        title: "Greetings!"-->
<!--                    });-->
<!--                }-->
<!--            });-->
<!---->
<!---->
<!---->
<!--        </script>-->
<!---->
<!--        <style>-->
<!---->
<!--            #map-canvas {-->
<!--                width: 500px;-->
<!--                height: 500px;-->
<!--                padding: 0; }-->
<!--        </style>-->
<!---->
<!--    </head>-->
<!---->
<!--    <body>-->
<!---->
<!---->
<!--        <div data-role="header" data-theme="a">-->
<!--            <h1>Maps</h1>-->
<!--        </div>-->
<!--        <div role="main" class="ui-content" id="map-canvas">-->
<!--            <!-- map loads here... -->-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--    </body>-->
<!---->
<!---->
<!--</html>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>jQuery Compact Social Media Share Plugin</title>

    <script src="jquery-1.4.4.min.js" type="text/javascript"></script>

    <script src="jsShare.js" type="text/javascript"></script>

    <link href="jsShare.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        $(document).ready(function() {
            $('#buttons').jsShare({ maxwidth: 360 });
            $('#buttons-expanded').jsShare({ initialdisplay: 'expanded', maxwidth: 360 });
        });
    </script>

    <style type="text/css">
        body
        {
            margin: 0;
            padding: 0;
            font-family: Myriad Pro, Arial, Tahoma;
            background: #FFFFFF url(images/pixel.jpg);
        }
        #wrapper
        {
            width: 100%;
            height: 100%;
        }
        #header
        {
            width: 100%;
            height: 80px;
            background-color: #f6f6f6;
            border-bottom: solid 1px gray;
            opacity: 0.7;
        }
        #header-contents
        {
            width: 700px;
            height: 80px;
            margin: auto;
            text-align: center;
        }
        #demo
        {
            width: 700px;
            margin: auto;
            height: 78px;
            text-align: center;
            padding-top: 140px;
        }
        h1, h2, h3, h4
        {
            padding: 0;
            margin: 0;
            font-weight: normal;
        }
        h2
        {
            color: #68BDCC;
            font-size:25pt;
        }
        h3
        {
            color: Gray;
            font-size: 12pt;
        }
        #demo p
        {
            text-align: left;
            color: #b5B5B5;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="header-contents">
            <h1>
                Minimal Social Share Plugin</h1>
            <h2>
                jQuery Compact Social Media Share Plugin</h2>
        </div>
    </div>
    <div id="demo">
        <p>
            Spread the word</p>
        <div id="buttons">
        </div>
        <p>
            Spread the word</p>
        <div id="buttons-expanded">
        </div>
    </div>
</div>
</body>
</html>
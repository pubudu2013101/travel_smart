<!DOCTYPE html>
<html lang="en">

<div data-role="page" data-ajax="true">

    <?php include 'panel.php'; ?>

    <head>

        <?php include 'jquery_loading.php'; ?>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#buttons').jsShare({maxwidth: 370});
            });
        </script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css"/>

        <link type="text/css" rel="stylesheet"
              href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css"/>
        <link type="text/css" rel="stylesheet"
              href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css"/>
        <link type="text/css" rel="stylesheet"
              href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css"/>
        <link type="text/css" rel="stylesheet"
              href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>

            #mypanel {
                background: #396E9B;
            }

            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {

                width: 70%;
                margin-left: 15%;
                margin-top: 10%;
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

            h1, h2 {
                color: #396E9B;
                margin-left: 2%;
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

            .ui-block-a {
                border-right: 1px solid;
                text-align: left;
                height: 100%;
            }

            .ui-block-a {
                border-right: 1px solid;
                text-align: match-parent;
                height: 100%;
            }

            h3 {
                margin-left: 6%;
                color: #396E9B;
            }

            #contact {
                text-align: center;
            }

            #address {
                text-align: left;
                margin-left: 6%;
            }

            p {
                margin: 6%;
            }

            body{
                background-image: image(../images/game.jpg)
            }

            #share {
                margin-left: 6%;
                color: #FFFFFF;
            }

            .jssocials-share-link {
                border-radius: 0%;
            }

            @media screen and (max-width: 450px){

                .carousel-inner{

                    margin-top: 20px;
                    height: 850px;

                }

                #myCarousel{

                    margin-top: 30px;
                    padding-top: 30%;
                }

                #rc{

                    margin-bottom: 480px;
                }

            }


        </style>

    </head>

    <body>

    <div data-role="main" class="ui-content">

        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
            <a href="#mypanel"
               class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
               id="navbtn">Search</a>
            <h1>How to play</h1>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../../travel_smart/images/image2.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="../../travel_smart/images/image4.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="../../travel_smart/images/image3.jpg" alt="Flower">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" id="rc" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" id="rc" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </body>

</div>
</html>
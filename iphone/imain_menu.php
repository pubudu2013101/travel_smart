<!DOCTYPE html>
<html lang="en">

<div data-role="page" data-ajax="true">

    <?php include 'panel.php'; ?>

    <head>

        <?php include 'jquery_loading.php'; ?>
        <link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
        <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>

        <script>
            $(document).ready(function () {

                $(".player").mb_YTPlayer();

            });
        </script>
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
                padding: 0 !important;

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

            #footer {
                background: #ffffff;
            }

            .video-section .pattern-overlay {
                background-color: rgba(71, 71, 71, 0.59);

                min-height: 650px;
                /* Incase of overlay problems just increase the min-height*/
            }

            .video-section h1, .video-section h3 {
                text-align: center;
                color: #fff;
            }

            .video-section h1 {
                font-size: 110px;
                font-family: 'Buenard', serif;
                font-weight: bold;
                text-transform: uppercase;
                margin: 0px auto 0px;
                text-shadow: 1px 1px 1px #000;
                -webkit-text-shadow: 1px 1px 1px #000;
                -moz-text-shadow: 1px 1px 1px #000;
            }

            .video-section h3 {
                font-size: 25px;
                font-weight: lighter;
                margin: 0px auto 15px;
            }

            .video-section .buttonBar {
                display: none;
            }

            .player {
                font-size: 1px;
            }

            #changePic{
                width:20%;
                height: 80px;
                margin-top: 10%;
                margin-left: 39%;
                font-size: xx-large;
                text-shadow: none;
                line-height: 80px;
                background: rgba(142, 93, 255, 0);
                color: #ffffff;


            }

        </style>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>Travel Smart</h1>

    </div>

    <div data-role="main" class="ui-content">
        <section class="content-section video-section" style="width:100%" style="height:100%">
            <div class="pattern-overlay">
                <a id="bgndVideo" class="player"
                <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=fdJc1_IBKJA',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Travel Smart</h1>
                            <h3>Play & Enjoy Your Journey With Us  </h3>
                            <a href="google_map.php" data-role="button" id="changePic" data-theme="e" rel="external">PLAY NOW</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </div>


    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>
    </body>


</div><!-- page -->
</html>
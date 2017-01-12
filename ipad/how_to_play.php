<!DOCTYPE html>
<html lang="en">

<div data-role="page" data-ajax="true">

    <?php include 'panel.php'; ?>

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

            #footer {
                background: #ffffff;
            }

            img {
                border-radius: 5px;
            }

            .poster-main {
                /*position: relative;*/
                /*margin-top: 30%;*/
                margin: 80%;
                max-width: 100px;
                text-align: center;
            }

            .poster-main .poster-list .poster-item {
                position: absolute;
                left: 0;
                top: 0;
            }

            .poster-main .poster-btn {
                position: absolute;
                top: 0;
                cursor: pointer;
            }

            .poster-main .poster-prev-btn {
                left: 0;
                background: url("../images/btn_l.png") no-repeat center center;
            }

            .poster-main .poster-next-btn {

                background: url("../images/btn_r.png") no-repeat center center;
            }

            .poster-list li{
                margin-left:5% !important;
                margin-top: 5% !important;
            }
            .poster-btn {
                margin-left: 5% !important;
                margin-top: -10% !important;
            }

        </style>

        <script src="../http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="../js/Carousel.js"></script>
        <script>
            $(function () {
                Carousel.init($("#carousel"));
                $("#carousel").init();
            });
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>How To Play</h1>

    </div>


    <div data-role="main" class="ui-content">

        <div class="poster-main" id="carousel" data-setting='{
							"width":900,
							"height":900,
							"posterWidth":700,
							"posterHeight":1000,
							"scale":0.8,
							"speed":1000,
							"autoPlay":true,
							"delay":3000,
							"verticalAlign":"middle"
							}'>
            <div class="poster-btn poster-prev-btn"></div>
            <ul class="poster-list">
                <li class="poster-item"><a href="#"><img src="https://unsplash.it/600/500?image=237" alt="" width="100%"/></a>
                </li>
                <li class="poster-item"><a href="#"><img src="https://unsplash.it/600/500?image=239" alt="" width="100%"/></a>
                </li>
                <li class="poster-item"><a href="#"><img src="https://unsplash.it/600/500?image=250" alt="" width="100%"/></a>
                </li>
                <li class="poster-item"><a href="#"><img src="https://unsplash.it/600/500?image=223" alt="" width="100%"/></a>
                </li>
                <li class="poster-item"><a href="#"><img src="https://unsplash.it/600/500?image=195" alt="" width="100%"/></a>
                </li>
            </ul>
            <div class="poster-btn poster-next-btn"></div>
        </div>

    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>
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

            #share {
                margin-left: 6%;
                color: #FFFFFF;
            }

            .jssocials-share-link {
                border-radius: 0%;
            }


        </style>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>About Us</h1>

    </div>


    <div data-role="main" class="ui-content">

        <div class="ui-grid-a">

            <div class="ui-block-a">
                <h2>What is Travel Smart ?</h2>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </br>  </br>
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </br>  </br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </br>  </br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                </p>

            </div>
            <div class="ui-block-b">
                <h2 id="contact">Contact Us</h2>

                <h3>Address :</h3>
                <p>No 342/3, Wallawaththa , Colombo 01</p>

                <h3>Contact Number</h3>
                <p>0114354653 / 0774523432</p>

                <h3>Email Address</h3>
                <p>travelsmart@gmail.com</p>

                <h3>Website</h3>
                <p>www.travelsmart.com</p>

                <h3>Share Us</h3>

                <div id="share" data-theme="a"></div>

                <script src="jquery.js"></script>
                <script src="jssocials.min.js"></script>
                <script src="jssocials.css"></script>
                <script>
                    $("#share").jsSocials({
                        showCount: false,
                        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "whatsapp"]
                    });


                </script>
            </div>


        </div>
    </body>

</div>
</html>
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

        </style>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>Points</h1>

    </div>


    <div data-role="main" class="ui-content">



    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>
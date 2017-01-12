<!DOCTYPE html>
<html lang="en">

<div data-role="page" data-ajax="true">

    <?php include 'panel.php'; ?>

    <head>

        <?php include 'jquery_loading.php'; ?>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link rel="stylesheet" href="fontawesome-stars.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
        <script src="../../travel_smart/js/rater.js" charset="utf-8"></script>

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
                text-align: center;

            }

            h2 {
                color: #396E9B;
                text-align: center;

            }

            hr {
                margin-bottom: 6%;
                margin-top: 6%;
            }

            #footer {
                background: #ffffff;
            }

            #backtbn {

                margin-left: 2%;
                background: #ffffff;
            }

            h4 {
                text-align: center;
                color: #396E9B;

            }

            .column img {
                width: 100%;
                200px;
            }

            .ui-btn {

                margin-bottom: 3%;

            }

            h1 {
                font-family: 'Rokkitt', serif;
                text-align: center;
            }

            ul {
                list-style: none;
                -webkit-margin-before = 0px
            }

            li {
                font-family: 'Rokkitt', serif;
                font-size: 2em;
            }

            input[type=radio] {
                border: 0px;
                width: 20px;
                height: 1em;
            }

            p {
                font-family: 'Rokkitt', serif;
            }

            #point_container {
                width: 100%;
                height: 20%;

            }

            #amout_container {
                width: 100%;
                height: 22%;
                border: 1px;
            }

            #first {
                width: 100%;
                height: 43%;
            }

            #button_container {
                width: 100%;
                height: 10%;
            }

            #point_1 {

                height: 100%;
            }

            #point_2 {
                height: 100%;
            }

            #point_1 {
                text-align: center;
            }

            #bloc1, #bloc2 {
                display: inline;
            }

            #reserveTicket {
                background: #396E9B;
                color: #ffffff;
                text-shadow: none;
                width: 80%;
                text-align: center;
                margin-left: 10%;

            }

            #bloc3 {
                padding-top: 1%;

            }

            .rated {
                background-color: yellow !important;
            }

            .rating a {
                border: 0px !important;
            }

            .rate2 {
                font-size: 35px;
            }

            .rate2 .rate-hover-layer {
                color: pink;
            }

            .rate2 .rate-select-layer {
                color: #396E9B;
            }

            #rate_container {
                padding-top: 10%;
                padding-left: 45%;
            }

            #paypal {
                padding-left: 44%;
            }

        </style>

        <script>
            $(document).ready(function () {
                var options = {
                    max_value: 5,
                    step_size: 1,
                    selected_symbol_type: 'hearts',
                    url: 'http://localhost/test.php',
                    initial_value: 3,
                    update_input_field_name: $("#input2")
            }

                $(".rate2").rate(options);

                $(".rate2").on("change", function (ev, data) {
                    console.log(data.from, data.to);
                });

                $(".rate2").on("updateError", function (ev, jxhr, msg, err) {
                    console.log("This is a custom error event");
                });

                $(".rate2").rate("setAdditionalData", {id: 42});
                $(".rate2").on("updateSuccess", function (ev, data) {
                    console.log(data);
                });
            });

            /*$(".rating a").click(function () {

             var id = $(this).parent().attr("id");
             $("#" + id + " .vote").text($(this).data("vote"));
             });


             $(".rating a").on("vmouseover", function () {

             var id = $(this).parent().attr("id");
             $("#" + id + ".rating a").each(function (i, v) {
             $(v).removeClass("rated");
             });

             $(this).prevAll().each(function (i, v) {
             $(v).addClass("rated");
             });
             $(this).addClass("rated");
             });*/


        </script>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="points.php"
           class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="backtbn" data-rel="back">Search</a>
        <h1>Place order</h1>

    </div>


    <div data-role="main" class="ui-content">

        <div id="point_container" class="ui-grid-a">

            <div class="ui-block-a" id="point_1">

                <div id="bloc1">
                    <h1>Total Amount</h1>
                </div>

                <div id="bloc2">
                    <h1>Rs. 650.00</h1>
                </div>
            </div>

            <div class="ui-block-b" id="point_2">

                <div id="bloc1">
                    <h1>Point Redeemed</h1>
                </div>

                <div id="bloc2">
                    <h1>10 pts</h1>
                </div>
            </div>
        </div>


        <div id="amout_container">
            <ul></ul>
            <div id="bloc3">
                <h2>Payable Amount</h2>
            </div>

            <div id="bloc4">
                <h1>Rs . 600.00</h1>
            </div>
        </div>

        <div id="rating">

        </div>
        <!--<div class="rating" id="first">
            <a href="#" data-role="button" data-inline="true" data-icon="star" data-vote="1" data-iconpos="notext"></a>
            <a href="#" data-role="button" data-inline="true" data-icon="star" data-vote="2" data-iconpos="notext"></a>
            <a href="#" data-role="button" data-inline="true" data-icon="star" data-vote="3" data-iconpos="notext"></a>
            <a href="#" data-role="button" data-inline="true" data-icon="star" data-vote="4" data-iconpos="notext"></a>
            <a href="#" data-role="button" data-inline="true" data-icon="star" data-vote="5" data-iconpos="notext"></a>
            <b><span class="vote"></span></b>

        </div>-->

        <div id="button_container">

            <!--<button type="button" id="reserveTicket" class="ui-btn ui-corner-all ui-shadow ui-btn-e  ui-icon-check">
                Pay with Paypal
            </button> -->

            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
                <input id="paypal" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
                       border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

        </div>
        <div id="rate_container">
            <div class="rate2"></div>
            <input id="input2" type="hidden">
        </div>
    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>

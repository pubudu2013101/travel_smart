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

            #place_image{
                margin: 10px;
                margin-top: 15px;
            }

        </style>

        <script>

            var my_email = location.search.split('user_email=')[1];

            my_email = 'pubudujayasanka@gmail.com';

            var arr = {user_email: my_email};


            $(function () {

                if (my_email == '') {
                    alert("No place selected");
                }
                else {

                    $.ajax({
                        url: 'http://localhost/ux_ui_backend/index.php/event_controller/get_events',
                        type: 'POST',
                        data: JSON.stringify(arr),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: false,
                        success: function (data) {

                            $.each(data, function(i, item) {

                                $('ul').append('<li><a href=""><img src=" ' +  item.event_images  + '" id="place_image" width="200px">' + item.event_header + '<p><br>' + item.event_details + '<br>' + item.event_date + '</p></a></li>');
                            });

                            $('#output').listview("refresh");

                        }
                    });
                }
            });

        </script>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>Upcoming Events</h1>

    </div>


    <div data-role="main" class="ui-content">

        <ul data-role="listview" data-filter="false" id="output" data-theme="a" data-inset="true"></ul>

    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>
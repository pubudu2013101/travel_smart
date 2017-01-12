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
                text-shadow: none;

            }

            hr {
                margin-bottom: 6%;
                margin-top: 6%;
            }

            #footer {
                background: #ffffff;
            }

            #place_image{
                margin-top: 15px;
                margin-left: 10px;
            }

        </style>

        <script>

            var my_email = location.search.split('user_email=')[1];

                my_email = 'pubudujayasanka@gmail.com';

            var arr = {user_email: my_email};

           // alert("Email " + my_email);

            $(function () {

                if (my_email == '') {
                    alert("No place selected");
                }
                else {

                    $.ajax({
                        url: 'http://travelsmartwebapp.azurewebsites.net/ux_ui_backend/index.php/place_controller/get_fav_places',
                        type: 'POST',
                        data: JSON.stringify(arr),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: false,
                        success: function (data) {

                            $.each(data, function (i, item) {
                                //         $('ul').append('<li><a href="">' + item.place_name + '<p><br>' + item.place_address + '<br>' + item.place_open_at + '</p></a></li>');


                                $('ul').append('<li><a href="place_description.php?place_id=' + item.place_id + '&user_email=' + my_email + '" rel="external"><img src=" ' +  item.place_img_url  + '" id="place_image" width="200px">' + item.place_name + '<p><br>' + item.place_address + '<br>' + item.place_open_at + '</p></a></li>');
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
        <h1>Favorites</h1>

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
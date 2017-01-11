<!DOCTYPE html>
<html lang="en">

<div data-role="page" data-ajax="true">
<!--     init comment-->
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

            h1, h2 {
                color: #396E9B;
                margin-left: 2%;
            }

            p {
                margin: 6%;
                font-size: large;
            }

            #time, #location, #contact {
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

            h3 {
                margin-left: 6%;
                color: #396E9B;
            }

            hr {
                margin-bottom: 6%;
                margin-top: 6%;
            }

            #footer {
                background: #ffffff;
            }

            #place_image {
                width: 60%;
                height: 60%;
                padding-left: 20%;
                margin-top: 8%;
                border: #000000;
            }

            #reserveTicket {
                background: #396E9B;
                color: #ffffff;
                text-shadow: none;
                width: 70%;
                text-align: center;
                margin-left: 17%;
                margin-top: 5%;


                /*padding-right: 20%;
                margin-top: 5%;*/
            }

            #hhh {
                margin-top: 12%;
                margin-left: 15%;
            }

            #addToFav {
                width: auto;
                margin-left: 6%;
                text-shadow: none;
            }

        @media screen and (max-width: 450px){

            #p_des{
                text-align: justify;
                width: 185%;
            }

            #bl_b{

                clear: both;
                margin: 34px;
            }

            #p_des{
                clear: both;
            }

            #place_image{
                width: 150%;
                padding-left: 0%;
            }

            #addToFav{
                margin-top: 15%;
                width: 150%;
                margin-left: 20%;
            }

            #reserveTicket{
                width: 150%;
                margin-left: 0%;
            }
            #hhh{
                margin-left: 0%;
            }

            #h1, h2 {
                margin-left: 5%;
            }
        }


        </style>

        <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
        <script type="text/javascript">
            (function(){
                emailjs.init("user_Ybag3s3qo2aKC3Wv62Zvm");
            })();
        </script>

        <script>
            var my_place = location.search.split('place_id=')[1];
            var my_email = location.search.split('user_email=')[1];

            var arr = {place_id: my_place};
            alert("Place_id " + my_place);
            alert("Email " + my_email);

            $(function () {
                alert("Hi" + my_place);

                if (my_place == '') {
                    alert("No place selected");
                }
                else {

                    $.ajax({
                        url: 'http://localhost/ux_ui_backend/index.php/place_controller/get_place_des',
                        type: 'POST',
                        data: JSON.stringify(arr),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: false,
                        success: function (response) {
                            var json_responce = response.place;
                            var data = json_responce[0];

                            alert(data.place_name);
                            $("#p_name").text(data.place_name);
                            $("#p_des").text(data.place_description);
                            $("#time").append("<b>" + data.place_open_at + "</b>");
                            $("#location").append("<b>" + data.place_address + "</b>");
                            $("#contact").append("<b>" + data.place_contact_no + "</b>");
                            $("#place_image").attr("src",data.place_img_url);

                        }
                    });
                }
            });

            $(document).ready(function () {
                $("#addToFav").click(function () {

                    var arr = {place_id: my_place , user_email: my_email };

                    if (my_place == '') {
                        alert("No place selected");
                    }
                    else {

                        $.ajax({
                            url: 'http://localhost/ux_ui_backend/index.php/place_controller/add_to_favorite',
                            type: 'POST',
                            data: JSON.stringify(arr),
                            contentType: 'application/json; charset=utf-8',
                            dataType: 'json',
                            async: false,
                            success: function (response) {

                                emailjs.send("gmail","my_template",{u_name: "Lahiru",to_email:'madhusankhalahiru@gmail.com' , link:'http://localhost/ipad_pubudu/ipad/place_description.php?place_id=2&user_email=pubudu@gmail.com'});

                            }
                        });
                    }
                    return false;


                });
            });

        </script>

        <script>


        </script>
    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>Place Description</h1>

    </div>


    <div data-role="main" class="ui-content">
        <div class="ui-grid-a">
            <div class="ui-block-a" id="bl_a" style="width: 50%">
                <h2 id="p_name">Lorem ispam</h2>
                <p id="p_des">
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

                <button type="button" id="addToFav"
                        class="ui-btn ui-corner-all ui-icon-heart ui-shadow ui-btn-e  ui-btn-icon-left ">
                    Add to Favorites
                </button>

            </div>

            <div class="ui-block-b" id="bl_b">
                <img src="../images/place_2.jpg" id="place_image" width="50%"><br>

                <div id="hhh">

                    <p id="time"><b>Open At : </b></p>
                    <p id="location"><b>Location : </b></p>
                    <p id="contact"><b>Contact No : </b></p>
                </div>
                <br>
                <button type="button" id="reserveTicket" class="ui-btn ui-corner-all ui-shadow ui-btn-e  ui-icon-check">
                    Reserve Ticket
                </button>


            </div>
        </div>
    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>
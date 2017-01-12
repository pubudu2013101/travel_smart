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
                text-align: center;

            }

            h2 {
                color: #396E9B;
                text-align: center;

            }

            p {
                color: #396E9B;
                text-align: center;
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

            #changePic {
                background: #ffffff;
                width: 50%;
                text-align: center;
                margin-left: 23%;
                color: #396E9B;
            }

            .ui-block-a {
                border-right: silver;
            }

            #fpbtn{
                background: #396E9B;
                color: #ffffff;
                text-shadow: none;
                padding: 4%;
                margin-top: 5%;
            }

            input[type="text"] {
                margin: 2%;

            }

            input[type="password"] {
                margin: 2%;

            }


            #form_update{
                margin-top: 5%;
            }

            @media screen and (max-width: 450px){

                #block-a{
                    clear: both;
                    width: 100%;
                }
                #block-b{
                    clear: both;
                    width: 100%;
                }
                #form_update{
                    margin-left: 9%;
                }

                 #changePic{
                     width: 53.5%;
                     margin-left: 18%;
                 }

            }
        </style>

        <script>
            $(document).ready(function () {
                $("#fpbtn").click(function () {

                    var u_email = $("#user_email").val();
                    var u_name = $("#user_name").val();
                    var u_password = $("#user_pass").val();
                    var c_password = $("#user_pass_c").val();
                    var c_mobile = $("#user_mobile").val();

                    var arr = {user_email: u_email, user_password: u_password, user_name: u_name, user_mobile:c_mobile};

                    if (u_email == '' || u_password == '' || u_name == '' || c_password == '' || c_mobile == '') {
                        alert("Please fill");
                    }
                    else {
                        if (u_password != c_password) {

                            alert("Password Doesn't match");
                        } else {

                            $.ajax({
                                url: 'http://travelsmartwebapp.azurewebsites.net/ux_ui_backend/index.php/user_account/user_update',
                                type: 'POST',
                                data: JSON.stringify(arr),
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                async: false,
                                success: function (response) {
                                    alert(response.message);
                                }
                            });
                        }
                        return false;
                    }

                });
            })
            ;


        </script>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="#mypanel"
           class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="navbtn">Search</a>
        <h1>Profile</h1>

    </div>


    <div data-role="main" class="ui-content">

        <div class="ui-grid-a">

            <div class="ui-block-a" id="block-a">
                <h1>Update Your Profile</h1>
                <br>

                <img src="../images/user.png" id="u_image" >
                <br>
                <br>

                <a href="index.html" data-role="button" id="changePic" data-theme="e">Change Profile Picture</a>

            </div>

            <div class="ui-block-b" id="block-b">
                <form id="form_update">
                    <div style="width:90%" >

                        <input type="text" name="user" id="user_name" value="" placeholder="User Name" data-theme="a">
                        <br>
                        <input type="text" name="user" id="user_mobile" value="" placeholder="Mobile Number" data-theme="a">
                        <br>
                        <input type="text" name="user" id="user_email" value="" placeholder="Email Address" data-theme="a">
                        <br>
                        <input type="password" name="user" id="user_pass" value="" placeholder="Password" data-theme="a">
                        <br>
                        <input type="password" name="user" id="user_pass_c" value="" placeholder="Confirm Password" data-theme="a">
                        <br>
                        <button type="button" id="fpbtn" class="ui-btn ui-corner-all ui-shadow ui-btn-e  ui-icon-check">Sign In</button>
                    </div>
                </form>
            </div>

        </div>


    </div>


    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <p>DroinNTec Solutions</p>

    </div>



</body>

</div>
</html>
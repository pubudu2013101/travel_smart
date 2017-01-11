<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include jQuery Mobile stylesheets -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <script>

        $(document).on("pagecontainershow", function () {
            ScaleContentToDevice();

            $(window).on("resize orientationchange", function () {
                ScaleContentToDevice();
            })
        });

        function ScaleContentToDevice() {
            scroll(0, 0);
            var content = $.mobile.getScreenHeight() - $(".ui-header").outerHeight() - $(".ui-footer").outerHeight() - $(".ui-content").outerHeight() + $(".ui-content").height();
            $(".ui-content").height(content);
            $(".ui_form").height(content * 1 / 2 - 10);
            $(".ui_empty").height(content * 1 / 2 - 10);

            $(document).on(".show-page-loading-msg", function () {
                $.mobile.loader.prototype.options.text = "loading";
                $.mobile.loader.prototype.options.textVisible = false;
                $.mobile.loader.prototype.options.theme = "a";
                $.mobile.loader.prototype.options.html = "";
            });
        }

    </script>


    <script>
        $(document).ready(function () {
            $("#login_btn").click(function () {

                var u_email = $("#u_name").val();
                var u_password = $("#password").val();

                var arr = {user_email: u_email, user_password: u_password};

                if (u_email == '' || u_password == '') {
                    alert("Please fill");
                }
                else {

                    $.ajax({
                        url: 'http://localhost/ux_ui_backend/index.php/user_account/user_login',
                        type: 'POST',
                        data: JSON.stringify(arr),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: false,
                        success: function (response) {
                            alert(response.message);

                            if(response.message == 'login successful'){
                                window.location.href = "http://localhost/travel_smart/ipad/main_menu.php";
                            }


                        }
                    });
                }
                return false;


            });
        })
        ;


    </script>


    <style>
        .ui-content {
            background: #396E9B;
        }

        a{
            text-shadow: none;
        }

        #login_btn {
            background: #ffffffff;
        }

        h1 {
            color: #ffffff;
            font-weight: normal;
            text-shadow: none;
        }

        h2 {
            color: #ffffff;
            font-weight: normal;
        }

        h3 {
            text-align: center;
        }

        h4 {
            text-align: center;
        }

        #forgot_password_dialog {
            padding: 10px;
        }

        #forgot_pass, #reg {
            color: #ffffff;
            font-weight: normal;
            margin-left: 15%;
        }

        [data-role="header"] {
            background: #396E9B;
        }

        [data-role="header"] {
            background: #396E9B;
        }

        [data-role="button"] {
            margin: 6%;
            padding: 4%;
        }

        input[type="text"], input[type="password"] {
            margin: 2%;

        }

        #footer {
            background: #396E9B;
        }

        p {
            color: white;
            margin-right: 25%;
            margin-left: 10%;
            font-weight: normal;
            text-shadow: none;

        }

        .ui_form {
            margin-left: 10%;
            margin-right: 10%;
        }

        #fpbtn {
            background: #396E9B;
            color: #ffffff;
            font-style: normal;
        }
    </style>

</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<div data-role="page" data-theme="a" id="p1">

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <h1>Login</h1>

    </div>

    <div role="main" class="ui-content" data-theme="a">

        <div class="ui-grid-a">
            <div class="ui-block-a">
                <h1>Login or Create New Account </h1>
                <br>
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

                </p>

            </div>
            <div class="ui-block-b">

                <div class="ui_empty">


                </div>

                <div class="ui_form">

                    <input type="text" name="u_name" value="" id="u_name" placeholder="User Name"/>
                    <br>
                    <input type="password" name="password" value="" id="password" placeholder="Password"/>

                    <a href="index.html" class="show-page-loading-msg" data-role="button" id="login_btn"
                       data-textonly="false" data-textvisible="true" data-msgtext="Loading">Login</a>

                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <a href="#popupLogin" data-role="link" id="forgot_pass" data-rel="popup"
                               data-position-to="window" data-transition="pop">Forgot Password?</a></div>

                        <div class="ui-block-b">
                            <a href="signup_page.php" data-role="link" id="reg" rel="external" data-transition="slide">Create
                                an account</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>


    <div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
        <form id="forgot_password_dialog">
            <div style="width:400px">
                <h3>Forgot Password</h3>
                <h4>Type your Email Address </h4>
                <label for="un" class="ui-hidden-accessible">Username:</label>
                <input type="text" name="user" id="un" value="" placeholder="username" data-theme="a">

                <button type="submit" id="fpbtn"
                        class="ui-btn ui-corner-all ui-shadow ui-btn-e ui-btn-icon-left ui-icon-check">Sign in
                </button>
            </div>
        </form>
    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>
</div>

</body>
</html>
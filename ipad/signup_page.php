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
            $(".ui_form").height(content * 5 / 8 - 20);
            $(".ui_empty").height(content * 3 / 8 - 20);

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
            $("#signup_btn").click(function () {

                var u_email = $("#u_email").val();
                var u_name = $("#u_name").val();
                var u_password = $("#u_password").val();
                var c_password = $("#u_c_password").val();
                var c_mobile = $("#u_mobile").val();

                var arr = {user_email: u_email, user_password: u_password, user_name: u_name, user_mobile:c_mobile};

                if (u_email == '' || u_password == '' || u_name == '' || c_password == '' || c_mobile == '') {
                    alert("Please fill");
                }
                else {
                    if (u_password != c_password) {

                        alert("Password Doesn't match");
                    } else {
                        alert("Done");
                        $.ajax({
                            url: 'http://localhost/ux_ui_backend/index.php/user_account/user_register',
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
        });


    </script>


    <style>
        .ui-content {
            background: #396E9B;
        }

        #login_btn {
            background: #ffffffff;
        }

        h1 {
            color: #ffffff;
            font-weight: normal;

        }

        h2 {
            color: #ffffff;
            font-weight: normal;
        }

        [data-role="header"] {
            background: #396E9B;
        }

        [data-role="footer"] {
            background: #396E9B;
        }

        #footer {
            background: #396E9B;
        }

        p {
            color: white;
            margin-right: 25%;
            margin-left: 10%;
            font-weight: normal;

        }

        #topic {
            margin-left: 10%;
        }

        .ui_form {
            margin-left: 10%;
            margin-right: 10%;
        }

        .lb {
            background: #0000ffff !important;
        }


    </style>

</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<div data-role="page" data-theme="a" id="p1">

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <h1>Register</h1>

    </div>

    <div role="main" class="ui-content" data-theme="a">

        <div class="ui-grid-a">
            <div class="ui-block-a">
                <h1 id="topic">Create New Account </h1>
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

                    <form>


                        <input type="text" id="u_name" value="" placeholder="User Name"/>

                        <input type="number" id="u_mobile" value="" placeholder="Mobile Number"/>

                        <input type="email" id="u_email" value="" placeholder="Email"/>

                        <input type="password" id="u_password" value="" placeholder="Password"/>

                        <input type="password" id="u_c_password" value="" placeholder="Confirm Password"/>

                        <input type="checkbox" name="checkbox-0" id="checkbox-mini-0" class="custom" data-mini="true"
                               data-theme="a"/>
                        <label for="checkbox-mini-0" class="lb">I Agree To Terms & Conditions</label>
                        <br>

                        <a href="main_menu.php" class="show-page-loading-msg" data-role="button" id="signup_btn"
                           data-textonly="false" data-textvisible="true" data-msgtext="Loading">Register</a>


                    </form>

                </div>
            </div>


        </div>

    </div>


    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>
</div>

</body>
</html>
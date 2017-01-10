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
        <h1>Upcoming Events</h1>

    </div>


    <div data-role="main" class="ui-content">



        <ul data-role="listview" data-inset="true">
            <li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
            <li><a href="index.html">
                    <h2>Stephen Weber</h2>
                    <p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
                    <p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
                    <p class="ui-li-aside"><strong>6:24</strong>PM</p>
                </a></li>
            <li><a href="index.html">
                    <h2>jQuery Team</h2>
                    <p><strong>Boston Conference Planning</strong></p>
                    <p>In preparation for the upcoming conference in Boston, we need to start gathering a list of
                        sponsors
                        and speakers.</p>
                    <p class="ui-li-aside"><strong>9:18</strong>AM</p>
                </a></li>
            <li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
            <li><a href="index.html">
                    <h2>Avery Walker</h2>
                    <p><strong>Re: Dinner Tonight</strong></p>
                    <p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait!</p>
                    <p class="ui-li-aside"><strong>4:48</strong>PM</p>
                </a></li>
        </ul>

    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>
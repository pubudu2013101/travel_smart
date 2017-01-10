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

            #my_img {
               border-radius: 5%;
                height: 200px;

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

            #backtbn {

                margin-left: 2%;
                background: #ffffff;
            }

            h4 {
                text-align: center;
                color: #396E9B;

            }

            #noOfPoint {
                color: #ff6666;
                line-height: 1%;
                text-align: right;
                font-size: 72px;
                margin-top: 16%;
                margin-right: 14%;
            }

            #lablePoint {
                color: #333399;
                text-align: right;
                font-size: xx-large;
                margin-right: 15.5%;
            }

            #hint {
                color: #333399;
                text-align: left;
                font-size: xx-large;
                margin-left: 7%;
                margin-top: 11%;
                line-height: 2%;
            }

            #ventaOption {
                margin-left: 4%;
                width: 100%;
            }

            .container {
                width: 100%;
                height: 200px;
            }

            .column {
                width: 33.33333333%;
                float: left;
            }

            .column img {
                width: 100%;
                200px;
            }

            #hint_img {
                width: 25%;
            }

            .button_container {
                width: 50%;
                margin-left: 25%;
                height: 20%;
                margin-top: 10%;

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

            li  {
                background: #396E9B;
                color: white;
                text-shadow: none;
                margin-top: 3%;
                padding: 1%;
                margin-bottom: 2%;
                border: 2px;
                border-radius: 5px;

            }

            p {
                font-family: 'Rokkitt', serif;
            }

            /* Quiz Classes */
            .quizContainer {
                background-color: transparent;
                border-radius: 6px;
                width: 100%;
                margin-top: 0px;
                margin-left: 0;
                padding-top: 0px;
                position: relative;

            }

            .nextButton {
                box-shadow: 3px 3px 5px #888;
                border-radius: 6px;
                width: 30%;
                height: 40px;
                font-weight: bolder;
                text-align: center;
                background-color: white;
                /*clear: both;*/
                color: #396E9B;
                position: relative;
                margin-left: 70%;
                padding-top: 20px;
            }

            .question {
                font-family: 'Georgia', serif;
                font-size: 2em;
                color: #396E9B;
                width: 100%;
                height: auto;
                margin-top: 5%;
                margin-bottom: 3%;
                border-radius: 6px;
                background-color: transparent;
                text-align: center;
            }

            .quizMessage {
                background-color: peachpuff;
                border-radius: 6px;
                width: 30%;
                margin: auto;
                text-align: center;
                padding: 2px;
                font-family: 'Rokkitt', serif;
                color: red;
            }

            .choiceList {
                font-family: Courier, serif;
                color: #396E9B;
                width: 50%;
                text-align: left;
                margin:0 auto;


            }

            .result {
                width: 30%;
                height: auto;
                border-radius: 6px;
                background-color: linen;
                margin: auto;
                text-align: center;
                font-family: 'Rokkitt', serif;
            }

            #pre-rendered{
                margin: 0 auto;
                padding: 3%;
                font-size: large;
                width:50%;
            }



        </style>

        <script>

            var my_place = location.search.split('place_id=')[1];

            var arr = {place_id: my_place};

            alert(my_place);

            $(function () {
                alert("Hi" + my_place);

                if (my_place == '') {
                    alert("No place selected");
                }
                else {

                    $.ajax({
                        url: 'http://localhost/ux_ui_backend/index.php/quiz_controller/get_quizes',
                        type: 'POST',
                        data: JSON.stringify(arr),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: false,
                        success: function (response) {

                            var json_responce = response.quizes;

                            var questions = new Array();

                            alert("Init " + questions.length);
//                            var questions = [{
//                                question: "What is the population of Brazil?",
//                                choices: ["145 million", "199 million", "182 million", "205 million"],
//                                correctAnswer: 1
//                            }];

                            for (var i = 0; i < json_responce.length; i++) {



                                var quiz = {
                                    question: json_responce[i].question,
                                    choices: [
                                        json_responce[i].w_ans_2,
                                        json_responce[i].w_ans_3,
                                        json_responce[i].c_ans,
                                        json_responce[i].w_ans_3
                                    ],
                                    correctAnswer: 2,
                                    image: json_responce[i].quiz_img
                                }
                                questions.push(quiz);
                            }

                            var currentQuestion = 0;
                            var correctAnswers = 0;
                            var quizOver = false;

                            $(document).ready(function () {

                                // Display the first question
                                displayCurrentQuestion();
                                $(this).find(".quizMessage").hide();

                                // On clicking next, display the next question
                                $(this).find(".nextButton").on("click", function () {
                                    if (!quizOver) {

                                        value = $("input[type='radio']:checked").val();

                                        if (value == undefined) {
                                            $(document).find(".quizMessage").text("Please select an answer");
                                            $(document).find(".quizMessage").show();
                                        } else {
                                            // TODO: Remove any message -> not sure if this is efficient to call this each time....
                                            $(document).find(".quizMessage").hide();

                                            if (value == questions[currentQuestion].correctAnswer) {
                                                correctAnswers++;
                                            }

                                            currentQuestion++; // Since we have already displayed the first question on DOM ready
                                            if (currentQuestion < questions.length) {
                                                displayCurrentQuestion();
                                            } else {
                                                displayScore();
                                                //                    $(document).find(".nextButton").toggle();
                                                //                    $(document).find(".playAgainButton").toggle();
                                                // Change the text in the next button to ask if user wants to play again
                                                $(document).find(".nextButton").text("Play Again?");
                                                quizOver = true;
                                            }
                                        }
                                    } else { // quiz is over and clicked the next button (which now displays 'Play Again?'
                                        quizOver = false;
                                        $(document).find(".nextButton").text("Next Question");
                                        resetQuiz();
                                        displayCurrentQuestion();
                                        hideScore();
                                    }
                                });

                            });

                            // This displays the current question AND the choices
                            function displayCurrentQuestion() {

                                console.log("In display current Question");

                                var question = questions[currentQuestion].question;
                                var questionClass = $(document).find(".quizContainer > .question");
                                var choiceList = $(document).find(".quizContainer > .choiceList");
                                var numChoices = questions[currentQuestion].choices.length;
                                $("#my_img").attr("src",questions[currentQuestion].image);

                                // Set the questionClass text to the current question
                                $(questionClass).text(question);

                                // Remove all current <li> elements (if any)
                                $(choiceList).find("li").remove();

                                var choice;
                                for (i = 0; i < numChoices; i++) {
                                    choice = questions[currentQuestion].choices[i];
                                    $('<li><input type="radio"  value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
                                }
                            }

                            function resetQuiz() {
                                currentQuestion = 0;
                                correctAnswers = 0;
                                hideScore();
                            }

                            function displayScore() {
                                $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + questions.length);
                                $(document).find(".quizContainer > .result").show();
                                window.location.href = "http://localhost/travel_smart/ipad/place_description.php?place_id=" + my_place;
                            }

                            function hideScore() {
                                $(document).find(".result").hide();
                            }

                        }
                    });
                }
            });


        </script>

    </head>

    <body>

    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="a">
        <a href="points.php"
           class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-nodisc-icon ui-alt-icon"
           id="backtbn" data-rel="back">Search</a>
        <h1>Slove a Clue</h1>

    </div>


    <div data-role="main" class="ui-content">


        <div class="container">
            <div class="column">
                <a href="#pre-rendered" data-theme="" id="ventaOption" data-rel="popup">
                    <img src="../images/hint.png" width="80" height="80" id="hint_img">


                </a>
                <h4 id="hint">Hint</h4>

            </div>
            <div class="column">

                <img src="../images/user.png" id="my_img" >



                <div class="ui-popup-screen ui-overlay-b ui-screen-hidden"></div>
                <div class="ui-popup-container ui-popup-hidden ui-popup-truncate" id="pre-rendered-popup">
                    <div class="ui-popup ui-body-inherit ui-overlay-shadow ui-corner-all" id="pre-rendered" data-role="popup" data-enhanced="true" data-overlay-theme="b" data-position-to="window">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

            </div>

            <div class="column">
                <h1 id="noOfPoint">013</h1>
                <h4 id="lablePoint">Points</h4>

            </div>

        </div>

        <div class="quizContainer">

            <div class="question"></div>
            <ul class="choiceList" ></ul>
            <div class="quizMessage"></div>
            <div class="result"></div>
            <div class="nextButton">Next Question</div>

        </div>


    </div>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" id="footer">

        <h1>DroinNTec Solutions</h1>

    </div>

    </body>

</div>
</html>

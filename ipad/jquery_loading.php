<meta charset="UTF-8">
<title>Title</title>

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
        $(".player").height(content - 500);

        $(document).on(".show-page-loading-msg", function () {
            $.mobile.loader.prototype.options.text = "loading";
            $.mobile.loader.prototype.options.textVisible = false;
            $.mobile.loader.prototype.options.theme = "a";
            $.mobile.loader.prototype.options.html = "";
        });
    }

    $("#idofpanel").panel("open", optionsHash);

</script>
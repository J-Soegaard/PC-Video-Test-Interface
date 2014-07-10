<!DOCTYPE html> 
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>You are not eligible to participate in the test.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script src="../js/bootstrap.js" type="text/javascript"></script>
    <link rel="icon" type="image/ico" href="../img/icon.ico"> 

</head>

<body>
    <?php $worker_id = $_GET['id']; ?>

    <div>
        <div class="text-center">
            <br>
            <h1>Sorry! You are not eligible to participate in the test.</h1>
        </div>
    </div>
    <div class="text-center">
        <div>
            <div id="intro">
                <br/>
                <script>
                    var H = $(window).height();
                    var W = $(window).width();
                    document.write("<h3>The resolution of your browser window is " + W + "x" + H + ".</h3>");
                </script>
                <br/>
                <h3>Your browser window needs to be at least 1280x810 for you to be eligible to participate in the test. 
                    Try making your browser window full screen, increase the display resolution of your device, or reset the zoom in your browser.                   
                    <br><br>
                    To try again in a new window in fullscreen mode, click <a href="#" onclick="fullscreen()">here</a>.
                    <br><br>
                    Thank you for your understanding.</h3>
            </div>

        </div>
    </div>


    <script>
        function fullscreen() {
            popup = window.open(
                '../index.php?id=<?php echo $worker_id ?>',
                null,
                'left=0,\
                top=0,\
                menubar=false,\
                toolbar=false,\
                location=false,\
                personalbar=false,\
                width=' + (screen.availWidth - 10) + ',\
                height=' + (screen.availHeight - 60) + ',\
                status=false,\
                resizable=yes,\
                scrollbars=yes');
        }
    </script>

</body>
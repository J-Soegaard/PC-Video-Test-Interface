<!DOCTYPE html> 
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Welcome back</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <link rel="icon" type="image/ico" href="img/icon.ico"> 

</head>

<body>

    <?php
    ob_start();
    include("dbinfo.inc.php");
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $id = $_GET['id'];

    $tmp = $dbname . ".subjects";
    $next = $conn->query("SELECT * FROM $tmp WHERE Name='$id'")->fetch_object()->Next;

    if ($next < 10) {
        $sql = "SELECT test_id$next FROM $tmp WHERE Name='$id'";

        $test_id = $conn->query($sql)->fetch_row();

        $sql2 = "SELECT * FROM " . $dbname . ".results WHERE Test_id='$test_id[0]'";

        $vid1 = $conn->query($sql2)->fetch_object()->Vid1;
        $vid2 = $conn->query($sql2)->fetch_object()->Vid2;
        mysqli_close($conn);
    } else {
        mysqli_close($conn);
        while (ob_get_status()) {
            ob_end_clean();
        }
        header("Location: end.php?id=$id");
        exit();
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="text-center">
                <br><br><br>
                <h1>Welcome back <?php echo $id ?></h1>
            </div>
        </div>
        <div class="row text-center">
            <div>
                <h3>We're loading the test where you left off, please wait...</h3>
            </div>
        </div>

        <br><br><br><br>

        <div class="text-center">

            <p>
                <input name="add" type="submit" class="btn btn-primary btn-large disabled"  id="start" value="Continue Test &raquo;" style="width:150px;visibility:hidden">
            </p>   

            <br><br>

            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" id="percentage" style="width: 0%;">
                    <b id="progress-text">0 %</b>
                </div>
                <br/>

            </div> 
        </div>
        <script>
            var html = '<video width="0" height="0" id="Video1" autoplay="true"><source src="vids/<?php echo $vid1 ?>.mp4" type="video/mp4"></video>';
            document.write(html);
            var html = '<video width="0" height="0" id="Video2" autoplay="true"><source src="vids/<?php echo $vid2 ?>.mp4" type="video/mp4"></video>';
            document.write(html);
        </script>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script>
            $(window).load(function () {
//                if (!(geoplugin_continentCode() === "EU" || geoplugin_continentCode() === "NA")) {
//                    window.location = "errors/continent.php";
//                }
//                else 
                if (($(window).height() < 810) || ($(window).width() < 1260)) {
                    window.location = "errors/resolution.php";
                }
                else {
                    $("#Video1").get(0).playbackRate = 16;
                    $("#Video2").get(0).playbackRate = 16;
                    loop();
                }

            });
            // Attach handler to "Start"-button -> When clicked, the intro goes away and the first page is shown (if all preloading is finished).
            $('#start').on('click', function () {

                window.location = "tests/test1.php?id=<?php echo $id ?>";
            });

            function loop() {

                if (($("#Video1").get(0).readyState > 0) && ($("#Video2").get(0).readyState > 0)) {

                    var time = $("#Video1").get(0).currentTime;
                    time += $("#Video2").get(0).currentTime;
                    var total = $("#Video1").get(0).duration;
                    total += $("#Video2").get(0).duration;
                    var bar = Math.round(time * 100 / total);

                    $('#percentage').css('width', bar + '%');
                    $('#progress-text').get(0).innerHTML = bar + '%';

                    if (time < total) {
                        setTimeout(loop, 29);
                    } else {
                        $('#start').css("visibility", "visible");
                        $('#start').removeClass('disabled');
                    }
                } else {
                    setTimeout(loop, 29);
                }

            }
    </script>

</body>
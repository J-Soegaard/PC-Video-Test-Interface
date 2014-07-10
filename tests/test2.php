<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Video 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style>
            body {background-image:url('../img/low_contrast_linen.png');}
        </style>
        <link rel="icon" type="image/ico" href="../img/icon.ico"> 
    </head>

    <body>

        <?php
        include("../dbinfo.inc.php");
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        $id = $_GET['id'];

        $tmp = $dbname . ".subjects";
        $next = $conn->query("SELECT * FROM $tmp WHERE Name='$id'")->fetch_object()->Next;

        $sql = "SELECT test_id$next FROM $tmp WHERE Name='$id'";

        $test_id = $conn->query($sql)->fetch_row();

        $sql2 = "SELECT * FROM " . $dbname . ".results WHERE Test_id='$test_id[0]'";

        $vid = $conn->query($sql2)->fetch_object()->Vid2;

        mysqli_close($conn);
        ?>

        <div class="container">
            <br>

            <div class="col-md-4">
                <font color="white" class="h1">Video B, Pair <?php echo $next ?>/9</font>
            </div>

            <div class="btn-group btn-group-lg col-md-7">
                <button type="button" id ="play" class="btn btn-primary" style="width:150px;height:50px" onclick="vidplay();">Play</button>
                <button type="button" class="btn btn-primary" id="next" style="width:150px;height:50px;visibility:hidden">Continue</button>
            </div>
            <div class="col-md-1">
                <button  type="button" id ="Instruction" class="btn btn-warning" style="width:100px;height:30px;" onClick="window.open('../instruction/instruction.php#videotest')">Instructions</button>		
            </div>
        </div>

        <br/>
        <br/>

        <div class="text-center">
            <script>
                var html = '<video width="1280" height="720" id="Video1" style="visibility:hidden"><source src="../vids/<?php echo $vid ?>.mp4" type="video/mp4">Your browser does not support the video playback.</video>';
                document.write(html);
            </script>

        </div> <!-- /container -->

        <script src="../js/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
        <script type="text/javascript">

                var vidtime = 0;

                function vidplay() {
                    $('#Video1').css("visibility", "visible");
                    $('#Video1').get(0).play();
                }

                $(window).load(function() {

                    $("#Video1").bind('ended', function() {
                        $('#next').css("visibility", "visible");
                        $('#play').text("Play again");
                         $('#Video1').css("visibility", "hidden");
                        vidtime += $("#Video1").get(0).currentTime;
                    });
                });

                $('#next').on('click', function() {
                    if ($(this).attr('visibility') === 'hidden') {
                        // do nothing
                    }
                    else {
                        if ($("#Video1").get(0).currentTime < $("#Video1").get(0).duration) {
                            vidtime += $("#Video1").get(0).currentTime;
                        }

                        $.ajax({
                            type: "POST",
                            url: "insertVidTime.php",
                            data: {id: "<?php echo $id ?>", vid: "2", time: vidtime},
                            success: function() {
                                window.location.href = "test3.php?id=<?php echo $id ?>";
                            }
                        });
                    }
                });

                // Disable right-click menu for video
                $(document).ready(function() {
                    $('#Video1').bind('contextmenu', function() {
                        return false;
                    });
                });

                //Pause video if window is hidden
                $(window).blur(function() {
                    $('#Video1').get(0).pause();
                    $('#Video1').css("visibility", "hidden");
                });

        </script>

    </body>
</html>


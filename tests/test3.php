<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Evaluation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="../img/icon.ico"> 
    </head>

    <body>

        <div align ="right">
            <br/>	
            <button  type="button" id ="Instruction" class="btn btn-warning" style="margin-right: 100px;width:100px;height:30px;" onClick="window.open('../instruction/instruction.php#videotest')">Instructions</button>
        </div>

        <div class="container text-center">

            <br/>
            <h2> Which video did you prefer (disregarding the content)? </h2>
            <br/>
            <form>
                <input type="radio" name="prefer" value="1"> Video A<br>
                <input type="radio" name="prefer" value="2"> Video B
            </form>

            <br/>
            <br/>

            <?php
            include("../dbinfo.inc.php");
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            $id = $_GET['id'];

            // Current test
            $tmp = $dbname . ".subjects";
            $next = $conn->query("SELECT * FROM $tmp WHERE Name='$id'")->fetch_object()->Next;

            $test_id = $conn->query("SELECT test_id$next FROM $tmp WHERE Name='$id'")->fetch_row();

            $q1_pos = $conn->query("SELECT * FROM $tmp WHERE Name='$id'")->fetch_object()->q1_pos;
            $q2_pos = $conn->query("SELECT * FROM $tmp WHERE Name='$id'")->fetch_object()->q2_pos;
            $q3_pos = $conn->query("SELECT * FROM $tmp WHERE Name='$id'")->fetch_object()->q3_pos;

            if ($q1_pos == $next) {
                $pair_id = $conn->query("SELECT Pairing_id$next FROM $tmp WHERE Name='$id'")->fetch_row();
                $tmp = $dbname . ".pairings";
                $question = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Question;
                $answer1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer1;
                $answer2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer2;
                $answer3 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer3;
                $correct = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Correct;
            } else if ($q2_pos == $next) {
                $pair_id = $conn->query("SELECT Pairing_id$next FROM $tmp WHERE Name='$id'")->fetch_row();
                $tmp = $dbname . ".pairings";
                $question = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Question;
                $answer1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer1;
                $answer2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer2;
                $answer3 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer3;
                $correct = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Correct;
            } else if ($q3_pos == $next) {
                $pair_id = $conn->query("SELECT Pairing_id$next FROM $tmp WHERE Name='$id'")->fetch_row();
                $tmp = $dbname . ".pairings";
                $question = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Question;
                $answer1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer1;
                $answer2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer2;
                $answer3 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Answer3;
                $correct = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$pair_id[0]'")->fetch_object()->Correct;
            }


            $next2 = $next + 1;
            if ($next < 9) {
                $tmp = $dbname . ".subjects";
                $next_pair = $conn->query("SELECT Pairing_id$next2 FROM $tmp WHERE Name='$id'")->fetch_row();
                $tmp = $dbname . ".pairings";
                $vid1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]'")->fetch_object()->Video_id1;
                $vid2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]'")->fetch_object()->Video_id2;
            } else {
                $next_pair = "";
                $vid1 = "";
                $vid2 = "";
            }

            mysqli_close($conn);

            if (isset($question)) {
                echo "<br/>
                <h2>$question</h2>
                <br/>
                <form id='dummyform'>
                    <input type='radio' name='dummy' value='1'>$answer1<br>
                    <input type='radio' name='dummy' value='2'>$answer2<br>
                    <input type='radio' name='dummy' value='3'>$answer3
                </form>

                <br/>
                <br/>";
            } else {
                $correct = 0;
            }
            ?>

            <p>
                Please wait for the next pairs of videos to load.
            </p>

            <br/>
            <br/>
            <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-primary" id="start" style="width:150px;height:50px;visibility:hidden">Next</button>  
            </div>

            <div class="text-center">

                <br><br>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" id="percentage" style="width: 0%;">
                        <b id="progress-text">0 %</b>
                    </div>
                    <br/>

                </div> 
            </div>

            <script>
                var html = '<video width="0" height="0" id="Video1" autoplay="true"><source src="../vids/<?php echo $vid1 ?>.mp4" type="video/mp4"></video>';
                document.write(html);
                var html = '<video width="0" height="0" id="Video2" autoplay="true"><source src="../vids/<?php echo $vid2 ?>.mp4" type="video/mp4"></video>';
                document.write(html);
            </script>
        </div> <!-- /container -->

        <script src="../js/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script>

            $(window).load(function() {
                if (<?php echo $next ?> < 9) {
                    $("#Video1").get(0).playbackRate = 16;
                    $("#Video2").get(0).playbackRate = 16;
                    loop();
                } else {
                    $('#start').css("visibility", "visible");
                    $('#start').removeClass('disabled');
                }
            });
            // Attach handler to "Start"-button -> When clicked, the intro goes away and page is shown (if all preloading is finished).
            $('#start').on('click', function() {
                if (!$("input[name='prefer']:checked").val())
                {
                    alert("Please choose the video you preferred.");
                    return false;
                }
                else if ($('#dummyform').length > 0) {
                    if (!$("input[name='dummy']:checked").val()) {
                        alert("Please answer the question.");
                        return false;
                    }
                    else {

                        var correct = ($("input[name='dummy']:checked").val() == <?php echo $correct ?>) ? 1 : 0;
                        $.ajax({
                            type: "POST",
                            url: "insert.php",
                            data: {id: "<?php echo $id ?>", prefer: $("input[name='prefer']:checked").val(), dummy: $("input[name='dummy']:checked").val(), correct: correct, test_id: "<?php echo $test_id[0] ?>"},
                            success: function() {
                                if (<?php echo $next ?> < 9) {
                                    location.href = "test1.php?id=<?php echo $id ?>";
                                }
                                else {
                                    location.href = "../end.php?id=<?php echo $id ?>";
                                }
                            }
                        });
                    }
                }
                else {
                    $.ajax({
                        type: "POST",
                        url: "insert.php",
                        data: {id: "<?php echo $id ?>", prefer: $("input[name='prefer']:checked").val(), test_id: "<?php echo $test_id[0] ?>"},
                        success: function() {
                            if (<?php echo $next ?> < 9) {
                                location.href = "test1.php?id=<?php echo $id ?>";
                            }
                            else {
                                location.href = "../end.php?id=<?php echo $id ?>";
                            }
                        }
                    });
                }
            });

            // Preload videos
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
</html>


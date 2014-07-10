<!DOCTYPE html>
<?php include("../dbinfo.inc.php"); ?>
<html lang="fr">

    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9" />
        <link href="../css/bootstrap.css" rel="stylesheet">
        <meta charset="UTF-8" />
        <meta http-equiv="content-language" content="fr" />
        <title>Instruction page</title>

    </script>
</head>
<body>
    <div class="container">

        <div class="row" >
            <div class="span4 logo text-center" style="background-color:#428bca;border-radius:10px;">
                <h1 class="main_title">Instructions</h1>
            </div>
        </div>
        </br>
        <div class="row">

            <div class="btn-group" align="center">
                <h2 id="screentest"> Step 1. Screen test </h2>
            </div>
            <div></br></div>

            <div  style="border:1px solid;border-radius:10px;">
                </br>
                <P class='lead'>The screen test will help us to identify the visibility and sharpness of your Screen.</P>
                <ul>
                    <li> <P class='lead'  >In the first part, you are asked to find the highest and smallest number visible on the white screen as shown in fig. 1 and click on the table provided.</P></li>
                    <li> <P class='lead' >In the second part, you are asked to click on the visible stars on the black background as shown in fig. 2.</P></li>
                    <li> <P class='lead' > Please complete both parts and submit your results before proceeding.</P></li>
                </ul>
                <div align="center"  >
                    <img src="Images/screentestfig.jpg"  alt="screentest 1" >
                </div>
            </div>
        </div>
        <div class="row">

            <div class="btn-group" align="center" >
                <h2 id="survey">Step 2. Survey</h2>
            </div>
            <div></br></div>
            <div  style="border:1px solid;border-radius:10px;">
                </br>
                <ul>
                    <li> <P class='lead' >In the survey, you choose the answers that fit your conditions.</P></li>
                    <li> <P class='lead' >You need to answer all questions before you can begin the test.</P></li>
                    <li> <P class='lead' >You might need to wait for the videos to load.</P></li>
                    <li> <P class='lead' >When the start button appears click it to start the test.</P></li>
                </ul>
                <div align="center">
                    <img src="Images/loading.jpg"  alt="icon 1">
                </div>
                </br>

            </div>

            <div class="row">

                <div class="btn-group"  align="center">
                    <h2 id="videotest">Step 3. Video test</h2>
                </div>
                <div></br></div>
                <div  style="border:1px solid;border-radius:10px;">
                    </br>
                    <P class='lead'>In the video tests, 9 sequential pairs of video will be presented to you. The videos contain different degradations such as <b><font size="4"> Freezing events and Low visual quality</font></b>  as shown in fig 4.</P>
                    <ul>
                        <li> <P class='lead' >After watching both videos you choose the video that you preferred to watch. You should base your choice on your perception of the videos and not on the content of the videos.</P></li>
                        <li> <P class='lead' > In some tests you will also be asked a question about the videos you just watched, e.g. what was the color of the jacket that the girl wore in the video ?. It is necessary to answer most of the questions correctly for the payment.</P></li>
                        <li> <P class='lead' >After submitting your answers you might need to wait for the next pair of videos to load.</P></li>
                        <li> <P class='lead' >When the Next button appears, click it to continue the task.</P></li>
                    </ul>
                    <div align="center">
                        <img src="Images/video_test.jpg" style="border:1px; black" alt="icon 1">
                    </div>
                    </br>

                </div>
            </div>

            <div class="row">

                <div class="btn-group" align="center">
                    <h2 id="endpage">Step 4. End page</h2>
                </div>
                <div></br></div>
                <div  style="border:1px solid;border-radius:10px;">
                    </br>
                    <ul>
                        <li> <P class='lead' >You have completed the task! Please copy your unique task code and submit it at the task page at microworkers.com</P></li>
                        <li> <P class='lead' >It is necessary to submit the code for the payment.</P></li>
                        <li> <P class='lead' >If you have any comments to this campaign please submit them in the forum thread for this campaign: <a href="<?php echo $feedbackURL ?>">Forum Thread</a></P></li>
                    </ul>

                </div>
            </div>

            <div>
                <font size="4.5">
                <h6 align="right">© video research team. </h6>

                </font>

            </div>
        </div>


</body>
</html>


<!DOCTYPE html> 
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Database status</title>
    <link href="css/bootstrap.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="text-center span12">

                <br><br>
                <table class="table table-bordered table-striped table-hover">
                    <tr class="success">
                        <th class="text-center">Task ID</th>
                        <th class="text-center"># Started</th>
                        <th class="text-center"># Completed</th>
                    </tr>

                    <?php
                    include("dbinfo.inc.php");
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                    
                    $sql1 = "SELECT * FROM " .$dbname . ".tasks";
                    $result = $conn->query($sql1) or die('Could not get data: ' . mysqli_error());

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['TaskID'] . "</td><td>" . $row['NumStarted'] . "</td><td>" . $row['NumCompleted'] . "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conn);
                    ?>

                </table>
            </div>
        </div>
    </div>

</body>
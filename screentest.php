<!DOCTYPE html> 
<?php
include("dbinfo.inc.php");
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$worker_name = $_POST['id'];

$tmp = $dbname . ".screentest";
$score = $conn->query("SELECT * FROM $tmp WHERE Name='$worker_name'")->fetch_object()->Score;
if (empty($score)) {

    $Lowest = $_POST['Lowest'];
    $Highest = $_POST['Highest'];
    $Score = $_POST['Score'];

    $stars = array_fill(1, 8, false);

    for ($i = 1; $i <= 8; $i++) {
        if (!(empty($_POST['Star' . $i]))) {
            $stars[$i] = TRUE;
        }
    }

    $Time = $_POST['Time'];
    $ClickNum = $_POST['ClickNum'];

    $sql = "INSERT INTO " . $tmp .
            "(Name,Lowest,Highest,Star1,Star2,Star3,Star4,Star5,Star6,Star7,Star8,Time,ClickNum,Score)" .
            "VALUES('$worker_name','$Lowest','$Highest','$stars[1]','$stars[2]','$stars[3]','$stars[4]','$stars[5]','$stars[6]','$stars[7]','$stars[8]','$Time','$ClickNum','$Score')";

    $result = $conn->query($sql) or die('Could not enter data: ' . mysqli_error());
} else {
    if ($score > 5) {
        header('HTTP/1.0 403 Forbidden');
    }
}
mysqli_close($conn);
?>
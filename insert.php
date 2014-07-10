<!DOCTYPE html> 
<?php
include("dbinfo.inc.php");
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$worker_id = $_POST['id'];

$i = $_POST['task'];
$id_pairing1 = $_POST['pair1'];
$id_pairing2 = $_POST['pair2'];
$id_pairing3 = $_POST['pair3'];
$id_pairing4 = $_POST['pair4'];
$id_pairing5 = $_POST['pair5'];
$id_pairing6 = $_POST['pair6'];
$id_pairing7 = $_POST['pair7'];
$id_pairing8 = $_POST['pair8'];
$id_pairing9 = $_POST['pair9'];
$Question1 = $_POST['question1'];
$Question2 = $_POST['question2'];
$Question3 = $_POST['question3'];
$q1_pos = $_POST['q1_pos'];
$q2_pos = $_POST['q2_pos'];
$q3_pos = $_POST['q3_pos'];
$BufferTime = $_POST['BufferTime'];

$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Environment = $_POST['Environment'];
$Hours = $_POST['Hours'];


$sql2 = "INSERT INTO " . $dbname . ".subjects" .
        "(Name, Age, Gender,Environment, Hours, Next, Task_id, Pairing_id1, Pairing_id2, Pairing_id3, Pairing_id4, Pairing_id5, Pairing_id6, Pairing_id7, Pairing_id8, Pairing_id9, Question1, Question2, Question3,q1_pos,q2_pos,q3_pos,BufferTime)" .
        "VALUES('$worker_id','$Age','$Gender','$Environment','$Hours',1,'$i','$id_pairing1','$id_pairing2','$id_pairing3','$id_pairing4','$id_pairing5','$id_pairing6','$id_pairing7','$id_pairing8','$id_pairing9','$Question1','$Question2','$Question3','$q1_pos','$q2_pos','$q3_pos','$BufferTime')";

$result2 = $conn->query($sql2) or die('Could not enter data: ' . mysqli_error());


$tmp = $dbname . ".pairings";
$num = \rand(1, 2);
if ($num == 1) {
    $vid1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$id_pairing1'")->fetch_object()->Video_id1;
    $vid2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$id_pairing1'")->fetch_object()->Video_id2;
} else {
    $vid1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$id_pairing1'")->fetch_object()->Video_id2;
    $vid2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$id_pairing1'")->fetch_object()->Video_id1;
}

$sql3 = "INSERT INTO " . $dbname . ".results" .
        "(Name,Pairing_id,Vid1,Vid2)" .
        "VALUES('$worker_id','$id_pairing1','$vid1','$vid2')";

$result3 = $conn->query($sql3) or die('Could not enter data: ' . mysqli_error());

$tmp = $dbname . ".results";
$test_id = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$id_pairing1' AND Name='$worker_id'")->fetch_object()->Test_id;

$sql4 = "UPDATE " . $dbname . ".subjects SET test_id1='$test_id' WHERE Name='$worker_id'";

$result4 = $conn->query($sql4) or die('Could not enter data: ' . mysqli_error());

$tmp = $dbname . ".tasks";
$result5 = $conn->query("UPDATE $tmp SET NumStarted = NumStarted + 1 WHERE TaskID = '$i'");

mysqli_close($conn);

//$url = "tests/test1.php?id=" . $worker_id;
//
//header("Location: $url");
?>
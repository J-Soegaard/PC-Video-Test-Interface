<!DOCTYPE html>
<?php
include("../dbinfo.inc.php");
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$worker_name = $_POST['id'];
$prefer = $_POST['prefer'];
$dummy = $_POST['dummy'];
$correct = $_POST['correct'];
$test_id = $_POST['test_id'];

// Store answers
if (empty($dummy)) {
    $sql = "UPDATE " . $dbname . ".results SET Prefer='$prefer' WHERE Test_id='$test_id'";
} else {
    $sql = "UPDATE " . $dbname . ".results SET Prefer='$prefer', Dummy='$dummy', Correct='$correct' WHERE Test_id='$test_id'";
}
$result = $conn->query($sql) or die('Could not enter data: ' . mysqli_error());

$tmp = $dbname . ".subjects";
$next = $conn->query("SELECT * FROM $tmp WHERE Name='$worker_name'")->fetch_object()->Next;

$next2 = $next + 1;

// Update next variable
$update = $conn->query("UPDATE $tmp SET Next=$next2 WHERE Name='$worker_name'");

if ($next2 < 10) {

// Fetch next pair and initialize new result
    $next_pair = $conn->query("SELECT Pairing_id$next2 FROM $tmp WHERE Name='$worker_name'")->fetch_row();
    $num = \rand(1, 2);
    $tmp = $dbname . ".pairings";
    if ($num == 1) {
        $vid1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]'")->fetch_object()->Video_id1;
        $vid2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]'")->fetch_object()->Video_id2;
    } else {
        $vid1 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]'")->fetch_object()->Video_id2;
        $vid2 = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]'")->fetch_object()->Video_id1;
    }

    $sql3 = "INSERT INTO " . $dbname . ".results" .
            "(Name,Pairing_id,Vid1,Vid2)" .
            "VALUES('$worker_name','$next_pair[0]','$vid1','$vid2')";

    $result3 = $conn->query($sql3) or die('Could not enter data: ' . mysqli_error());

    $tmp = $dbname . ".results";
    $next_test = $conn->query("SELECT * FROM $tmp WHERE Pairing_id='$next_pair[0]' AND Name='$worker_name'")->fetch_object()->Test_id;

    $sql4 = "UPDATE " . $dbname . ".subjects SET test_id$next2='$next_test' WHERE Name='$worker_name'";

    $result4 = $conn->query($sql4) or die('Could not enter data: ' . mysqli_error());
} else {
    // Update the number of completed tasks
    $tmp = $dbname . ".subjects";
    $task = $conn->query("SELECT * FROM $tmp WHERE Name='$worker_name'")->fetch_object()->Task_id;
    $tmp = $dbname . ".tasks";
    $result5 = $conn->query("UPDATE $tmp SET NumCompleted = NumCompleted + 1 WHERE TaskID = '$task'");
}

mysqli_close($conn);
?>
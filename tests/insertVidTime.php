<!DOCTYPE html> 
<?php
include("../dbinfo.inc.php");
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$worker_id = $_POST['id'];

$vid = $_POST['vid'];
$time = $_POST['time'];

$tmp = $dbname . ".subjects";
$next = $conn->query("SELECT * FROM $tmp WHERE Name='$worker_id'")->fetch_object()->Next;

$string = "Time_" . $next . "_" . $vid;

$sql = "UPDATE $tmp SET $string='$string' + '$time' WHERE Name='$worker_id'";

$result = $conn->query($sql) or die('Could not enter data: ' . mysqli_error($conn));

mysqli_close($conn);

?>
<?php
if (!isset($_SESSION)) {
  session_start();
  date_default_timezone_set("Australia/Brisbane");
}

$answer1 = $_REQUEST['answer1'];
$answer2 = $_REQUEST['answer2'];
$answer3= $_REQUEST['answer3'];
$answer4= $_REQUEST['answer4'];
$answer5= $_REQUEST['answer5'];

$con=mysqli_connect("localhost","root","--put password here--","USM");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO `Reviews` (`ReviewID`, `RoomNumber`, `Date`, `Time`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `Comment`) VALUES (NULL, '103', '2014-05-14', '12:12:12', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
header("Location: index.php");
?>
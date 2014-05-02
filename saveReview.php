<?php

$con=mysqli_connect("localhost","root","password","USM");

$answer1 = mysqli_real_escape_string($con, $_GET['answer1']);
$answer2 = mysqli_real_escape_string($con, $_GET['answer2']);
$answer3 = mysqli_real_escape_string($con, $_GET['answer3']);
$answer4 = mysqli_real_escape_string($con, $_GET['answer4']);
$answer5 = mysqli_real_escape_string($con, $_GET['answer5']);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Reviews (ReviewID, RoomNumber, Date, Time, Answer1, Answer2, Answer3, Answer4, Comment) Values (null, '101', '2014-05-14', '12:12:12',
'$answer1', '$answer2', '$answer3', '$answer4', '$answer5')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
header("Location: index.php?".$answer1);
?>
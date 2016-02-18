<?php
$dHost = "localhost";
$dUser = "root";
$dPass = "";

$con = mysqli_connect("$dHost","$dUser","$dPass");
if (!$con)  {
  die('Could not connect: ' . mysqli_error());
  }
?>
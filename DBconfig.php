<?php
$servername = "127.0.0.1";
$username = "root";
$password = "************";
$db = "final";

$connect = mysqli_connect("$servername", "$username", "$password", "$db");

if (!$connect) {
  die("Was not able to connect to Database, Call Dave and tell him " . mysqli_connect_error());
}
?>

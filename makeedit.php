<?php
include('DBconfig.php');

$userlogin = $_POST['user1'];
$field = $_POST['field1'];
$value = $_POST['value1'];

$getid = $connect->query(
  "SELECT u.ID
   FROM UserLogin u
   WHERE u.Username='$userlogin'
");

$update = $connect->query(
  "UPDATE ProvidedRecord
   SET Email='$value'
");


if ($update) {
  echo 1;
}
else {
  echo 2;
}
?>

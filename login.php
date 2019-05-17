<?php
include('DBconfig.php');
$userlogin = $_POST['user1'];
$userpass = $_POST['password1'];

if ($connect) {

  $result = $connect->query("SELECT ID
                             FROM UserLogin
                             WHERE Username='$userlogin'
                             AND Password='$userpass'");

  $isgrantor = $connect->query("SELECT g.ID, u.ID, u.Username, u.Password
                                FROM UserLogin u, Grantor g
                                WHERE g.ID=u.ID
                                AND u.Username='$userlogin'
                                AND u.Password='$userpass'");

  $isadmin = $connect->query("SELECT u.Username, u.Password
                              FROM UserLogin u
                              WHERE u.Username='$userlogin'
                              AND u.Username='dpt16c'
                              AND u.Password='$userpass'
                              AND u.Password='admin'");

  if ($isadmin->num_rows == 1) {
    echo 1;
  }
  else if ($isgrantor->num_rows == 1) {
    echo 2;
  }
  else if ($result->num_rows == 1) {
    echo 3;
  }
  else {
    echo 4;
  }
}
else {
  die("Was Not able to connect");
}
?>

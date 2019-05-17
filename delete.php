<?php
include('DBconfig.php');
$userlogin = $_POST['user1'];

if ($connect) {

  $getid = $connect->query("SELECT ID
                            FROM UserLogin
                            WHERE Username='$userlogin'
                            ");

  $row=mysqli_fetch_assoc($getid);
  $id=(int)$row['ID'];

  $del = $connect->query("DELETE FROM UserLogin
                          WHERE ID='$id'
                         ");
  $del2 = $connect->query("DELETE FROM Student
                           WHERE ID='$id'
                          ");
  $del3 = $connect->query("DELETE FROM Grantor
                           WHERE ID='$id'
                          ");
  $del4 = $connect->query("DELETE FROM StateRecord
                           WHERE ID='$id'
                          ");
  $del5 = $connect->query("DELETE FROM ProvidedRecord
                           WHERE ID='$id'
                          ");

  $result = $connect->query("SELECT *
                             FROM UserLogin
                             WHERE Username='$userlogin'
                             ");

/* Means not deleted if there is astill a row for that person */
  if ($result->num_rows == 1) {
    echo 2;
  }
  else {
    /* Successful Deletio n*/
    echo 1;
  }
}
else{
  echo "Not Connected";
}

?>

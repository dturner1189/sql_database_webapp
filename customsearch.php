<?php
include('DBconfig.php');

echo 1;

$userlogin = $_POST['id1'];

$sname = $_POST['byname1'];
$hsgpa = $_POST['byhsgpa1'];
$cogpa = $_POST['bycogpa1'];
$gender = $_POST['bygender1'];
$income = $_POST['byincome1'];
$prevcoll = $_POST['byprevcoll1'];
$servhrs = $_POST['byservhrs1'];
$citizan = $_POST['bycitizanship1'];
$sports = $_POST['bysports1'];
$major = $_POST['bymajor1'];
$honors = $_POST['byhonors1'];
$studyabroad = $_POST['bystudyabroad1'];
if ($connect) {
$found = $connect->query(
  "SELECT *
   FROM UserLogin s, Eligability e
   WHERE s.ID=e.ID
   AND e.HSGPA<='$hsgpa'
   AND e.COLLGPA<='$cogpa'
   AND e.Gender='$gender'
   AND e.Income>='$income'
   AND e.ServiceHours<='$servhrs'
   AND e.Citizanship='$citizan'
   ");

if ($found->num_rows > 0) {
  echo 1;
}

}



?>

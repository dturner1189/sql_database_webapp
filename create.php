<?php include('DBconfig.php');

$usernames = $_POST['name1'];
$userlogin = $_POST['user1'];
$userpass = $_POST['password1'];
$userrepass = $_POST['repass1'];

$userhsgpa = $_POST['hagpa1'];
$usercollgpa = $_POST['collgpa1'];
$usersports = $_POST['sports1'];

$usermajor = $_POST['major1'];
$useremail = $_POST['email1'];
$usergender = $_POST['gender1'];

$userincome = $_POST['income1'];
$userprevcoll = $_POST['prevcoll1'];
$userservhrs = $_POST['servhrs1'];

$usercitizan = $_POST['citizan1'];
$userhonors = $_POST['honors1'];
$userstudy = $_POST['studyabroad1'];

if ($connect) {
  $result = $connect->query("SELECT *
                             FROM UserLogin
                             WHERE Username='$userlogin'");

  /* Username taken*/
  if ($result->num_rows == 1) {
    echo 1;
  }
  /* Username is not taken, good to go.. */
  else if ($result->num_rows == 0) {
    $makeuser = $connect->query(
      "insert into UserLogin (ID, Username, Password)
      values('5006', '$userlogin', '$userpass')");

    $loadstudent = $connect->query(
      "insert into Student (ID, Name, ScholarshipsWon, NumberEligableFor, AmountEligableFor)
      values('5006', '$usernames', 0, 0, 0)");

    $loadstate = $connect->query(
      "insert into StateRecord (ID, Name, HsGPA, CollGPA, Sports, Courses)
      values('5006', '$usernames', '$userhsgpa', '$usercollgpa', '$usersports', '$usermajor')");

    $loadpersonal = $connect->query(
      "insert into ProvidedRecord (ID, Email, Gender, Income, PreviousCollege, ServiceHours,
                                    Citizanship, Major, Sports, HonorsProgram, StudyAbroad)
      values('5006', '$useremail', '$usergender', '$userincome', '$userprevcoll',
            '$userservhrs', '$usercitizan', '$usermajor', '$usersports', '$userhonors', '$userstudy')");
    echo 2;
  }
  else {
    echo "could not make this user";
  }
}
?>

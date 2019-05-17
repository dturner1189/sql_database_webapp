<?php
include('DBconfig.php');
$userlogin = htmlspecialchars($_GET["id"]);

$result = $connect->query(
  "SELECT s.Name, u.ID, u.Username,
          u.Password, s.ScholarshipsWon,
          s.NumberEligableFor, s.AmountEligableFor
  FROM UserLogin u, Student s
  WHERE u.ID=s.ID
  AND u.Username='$userlogin'"
);

$schoolrecord = $connect->query(
  "SELECT r.HsGPA, r.CollGPA, r.Sports, r.CoursesTaken
   FROM UserLogin u, StateRecord r
   WHERE u.ID=r.ID
   AND u.Username='$userlogin'"
 );

$providedrecord = $connect->query(
  "SELECT  p.Email, p.Gender, p.Income, p.PreviousCollege,
           p.ServiceHours, p.Citizanship, p.Major, p.Sports,
           p.HonorsProgram, p.StudyAbroad
  FROM UserLogin u, ProvidedRecord p
  WHERE u.ID=p.ID
  AND u.Username='$userlogin'"
);

$top = $connect->query(
  "SELECT p.Email, p.Gender, p.Income,
          p.PreviousCollege, p.ServiceHours
  FROM UserLogin u, ProvidedRecord p
  WHERE u.ID=p.ID
  AND u.Username='$userlogin'"
);

$bottom = $connect->query(
  "SELECT p.Citizanship, p.Major, p.Sports,
          p.HonorsProgram, p.StudyAbroad
  FROM UserLogin u, ProvidedRecord p
  WHERE u.ID=p.ID
  AND u.Username='$userlogin'"
);
?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="studenthome.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Student Page</title>
</head>

<body background="images/data.png" class="img-fluid">


  <h1>Heres what we have so far</h1>

      <table class="data-table">
        <caption class="title">Heres a little about your account</caption>
          <thead> <tr>
                  <th>Name</th>
                  <th>ID</th>
                  <th>username</th>
                  <th>password</th>
                  <th>Won</th>
                  <th>Num eligable</th>
                  <th>Amt eligable for</th>
                  </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                      <td>'.$row["Name"].'</td>
                      <td>'.$row["ID"].'</td>
                      <td>'.$row["Username"].'</td>
                      <td>'.$row["Password"].'</td>
                      <td>'.$row["ScholarshipsWon"].'</td>
                      <td>'.$row["NumberEligableFor"].'</td>
                      <td>'.$row["AmountEligableFor"].'</td>
                      </tr>';
              }
            }
            else { echo "Error Nothing found in users table " + $userlogin; }
            ?>
          </tbody>
        </table>




  <div class="container">
      <div class="main">
          <form class="form" method="post" action="#">
          <h1>Heres some things you can do with your account</h1>
  <input type="button" name="search" id="search" value="See what youre eligable for">
  <input type="button" name="edit" id="edit" value="Edit your account">
  <input type="button" name="gen" id="gen" value="Look through all scholarships">
  <input type="button" name="advsearch" id="advsearch" value="Look for somthing specific">
</form>
</div>
</div>
        <table class="data-table">
          <caption class="title">Take a look at your State Record</caption>
            <thead>
                <tr>
                    <th>High School GPA</th>
                    <th>College GPA</th>
                    <th>Sports</th>
                    <th>Courses</th>
                </tr>
            </thead>
            <tbody>
              <?php
              if ($schoolrecord->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($schoolrecord)) {
                  echo '<tr>
                        <td>'.$row["HsGPA"].'</td>
                        <td>'.$row["CollGPA"].'</td>
                        <td>'.$row["Sports"].'</td>
                        <td>'.$row["Courses"].'</td>
                        </tr>';
                }
              }
              else { echo "Error Nothing found in state records table " + $userlogin; }
              ?>
            </tbody>
          </table>


          <table class="data-table">
            <caption class="title">Take a look at What you have provided us</caption>

              <thead>
                  <tr>
                      <th>Email Address</th>
                      <th>Gender</th>
                      <th>Income</th>
                      <th>Previous College Experience</th>
                      <th>Service Hours Accomplished</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                if ($top->num_rows > 0) {
                  while ($row = mysqli_fetch_assoc($top)) {
                    echo '<tr>
                          <td>'.$row["Email"].'</td>
                          <td>'.$row["Gender"].'</td>
                          <td>'.$row["Income"].'</td>
                          <td>'.$row["PreviousCollege"].'</td>
                          <td>'.$row["ServiceHours"].'</td>
                          </tr>';
                  }
                }
                else { echo "Error Nothing found in state records table " + $userlogin; }
                ?>
              </tbody>
            </table>


            <table class="data-table">
              <caption class="title"></caption>
                <thead>
                    <tr>
                        <th>Citizanship status</th>
                        <th>Prospective Major</th>
                        <th>Sports Played</th>
                        <th>Involved in an Honors Program</th>
                        <th>Intrested in study abroad options</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if ($bottom->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($bottom)) {
                      echo '<tr>
                            <td>'.$row["Citizanship"].'</td>
                            <td>'.$row["Major"].'</td>
                            <td>'.$row["Sports"].'</td>
                            <td>'.$row["HonorsProgram"].'</td>
                            <td>'.$row["StudyAbroad"].'</td>
                            </tr>';
                    }
                  }
                  else { echo "Error Nothing found in state records table " + $userlogin; }
                  ?>
                </tbody>
                <br></br>
                <br></br>
              </table>

      </div> <!-- END OF MAIN div-->


</body> <!-- End of main body-->


</html>

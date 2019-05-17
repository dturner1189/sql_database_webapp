<?php
include('DBconfig.php');

$result = $connect->query(
  "SELECT DISTINCT s.Name, s.TotalValue, s.ValueRemaining, s.NumberAwards,
                  s.AwardsRemaining, s.NumberStudentsEligable, e.HSGPA,
                  e.COLLGPA, e.Gender, e.Income, e.ServiceHours, e.Citizanship,
                  e.Major, e.Sports, e.HonorsProgram, e.StudyAbroad
  FROM Scholarship s, Eligability e
  WHERE s.ID=e.ID
");

?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="studentback.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Scholarship master list</title>
</head>

<body background="images/data.png" class="img-fluid">
  <form class="form" method="post" action="#">
      <input type="button" name="back" id="back" value="Go Back">
  </form>
  <h1>Heres the Big list</h1>
    <table class="data-table">
          <thead>
            <tr>
                <th>Name</th>
                <th>Total Value</th>
                <th>Value remaining</th>
                <th>Number of Awards</th>
                <th>Awards left</th>
                <th>Total eligable</th>
                <th>High School Gpa</th>
                <th>Collegiate Gpa</th>
                <th>For genders</th>
                <th>Making less than</th>
                <th>service requirement</th>
                <th>For citizans of</th>
                <th>In the major</th>
                <th>Plays this sport</th>
                <th>honors Student</th>
                <th>overseas?</th>
            </tr>
        </thead>

        <tbody>

          <?php
          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>
                  <td>'.$row["Name"].'</td>
                  <td>'.$row["TotalValue"].'</td>
                  <td>'.$row["ValueRemaining"].'</td>
                  <td>'.$row["NumberAwards"].'</td>
                  <td>'.$row["AwardsRemaining"].'</td>
                  <td>'.$row["NumberStudentsEligable"].'</td>
                  <td>'.$row["HSGPA"].'</td>
                  <td>'.$row["COLLGPA"].'</td>
                  <td>'.$row["Gender"].'</td>
                  <td>'.$row["Income"].'</td>
                  <td>'.$row["ServiceHours"].'</td>
                  <td>'.$row["Citizanship"].'</td>
                  <td>'.$row["Major"].'</td>
                  <td>'.$row["Sports"].'</td>
                  <td>'.$row["HonorsProgram"].'</td>
                  <td>'.$row["studyabroad"].'</td>
                  </tr>';
                }
          }
          else {
            echo "Error Nothing found in scholarships table " + $userlogin;
          }
          ?>
        </tbody>
      </table>

    </body>


</html>

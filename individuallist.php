<?php
include('DBconfig.php');
$userlogin = htmlspecialchars($_GET["id"]);

$getid = $connect->query(
    "SELECT s.ID, s.Name
     FROM UserLogin u, Student s
     WHERE u.ID=s.ID
     AND u.Username='$userlogin'
");
$getname = $connect->query(
    "SELECT s.Name
     FROM UserLogin u, Student s
     WHERE u.ID=s.ID
     AND u.Username='$userlogin'
");

$result = $connect->query(
  "SELECT Scholarship.Name, Scholarship.TotalValue,
          Scholarship.ValueRemaining, Scholarship.NumberAwards,
          Scholarship.AwardsRemaining
  FROM Scholarship, Eligability e, ProvidedRecord p, StateRecord st, UserLogin u
  WHERE Scholarship.ID=e.ID
  AND u.Username='$userlogin'
  AND u.ID=st.ID
  AND u.ID=p.ID
  AND p.ID=st.ID
  AND e.HSGPA<=st.HsGPA
  AND e.COLLGPA<=st.CollGPA
  AND e.Income>=p.Income
  AND p.ServiceHours>=e.ServiceHours
  AND e.Citizanship=p.Citizanship
  AND e.HonorsProgram<=p.HonorsProgram
  AND e.StudyAbroad<=p.StudyAbroad
");
/*$update = $connect->query(
     "UPDATE Student
      SET NumberEligableFor='$result->num_rows'
      WHERE ID='$getid'");*/
?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="studentback.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Eligability</title>
</head>

<body background="images/data.png" class="img-fluid">

<form class="form" method="post" action="#">
    <input type="button" name="back" id="back" value="Go Back">
</form>


  <h1>Any of these look intresting?</h1>

  <table class="data-table">
      <thead>
        <tr>
          <th>USER ID</th>
        </tr>
      </thead>

      <tbody>
        <?php
        if ($getid->num_rows > 0) {
          while ($row = mysqli_fetch_assoc($getid)) {
            echo '<tr>
                <td>'.$row["ID"].'</td>
                </tr>';
              }
        }
        else {
          echo "Error Nothing found in scholarships table " + $userlogin;
        }
        ?>
      </tbody>
    </table>

    <table class="data-table">
        <thead>
          <tr>
            <th>Name</th>
          </tr>
        </thead>

        <tbody>
          <?php
          if ($getname->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($getname)) {
              echo '<tr>
                  <td>'.$row["Name"].'</td>
                  </tr>';
                }
          }
          else {
            echo "Error Nothing found in scholarships table " + $userlogin;
          }
          ?>
        </tbody>
      </table>

<br></br>

    <table class="data-table">
          <thead>
            <tr>
                <th>Name</th>
                <th>Total Value</th>
                <th>Value remaining</th>
                <th>Number of Awards</th>
                <th>Awards left</th>

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

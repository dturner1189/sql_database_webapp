<?php
include('DBconfig.php');
$userlogin = htmlspecialchars($_GET["id"]);
$userinfo = $connect->query("SELECT *
                           FROM UserLogin u
                           WHERE u.Username='$userlogin'");
$userinfo2 = $connect->query("SELECT *
                            FROM ProvidedRecord p, UserLogin u
                            WHERE u.Username='$userlogin'
                            AND u.ID=p.ID");
?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="edit.js"></script>
<script type="text/javascript" src="studentback.js"></script>
<head>
    <meta charset="UTF-8">
    <title>Edit your Profile</title>
</head>

<body background="images/data.png" class="img-fluid">
  <form class="form" method="post" action="#">
      <input type="button" name="back" id="back" value="Go Back">
  </form>

  <h1>User Info</h1>
      <table class="data-table">
        <caption class="title">Your Account</caption>
          <thead>
              <tr>
                  <th>ID</th>
                  <th>username</th>
                  <th>password</th>
              </tr>
          </thead>

          <tbody>
            <?php
            if ($userinfo->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($userinfo)) {
                echo '<tr>
                      <td>'.$row["ID"].'</td>
                      <td>'.$row["Username"].'</td>
                      <td>'.$row["Password"].'</td>
                      </tr>';
              }
            }
            else { echo "Error Nothing found in users table " + $userinfo; }
            ?>
          </tbody>
        </table>


        <table class="data-table">
          <caption class="title">Provied information</caption>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Income</th>
                    <th>Service Hours</th>
                    <th>Citizanship</th>
                    <th>Major</th>
                    <th>Sports</th>
                    <th>Honors Program</th>
                    <th>Study Abroad status</th>
                </tr>
            </thead>

            <tbody>
              <?php
              if ($userinfo2->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($userinfo2)) {
                  echo '<tr>
                        <td>'.$row["Email"].'</td>
                        <td>'.$row["Gender"].'</td>
                        <td>'.$row["Income"].'</td>
                        <td>'.$row["ServiceHours"].'</td>
                        <td>'.$row["Citizanship"].'</td>
                        <td>'.$row["Major"].'</td>
                        <td>'.$row["Sports"].'</td>
                        <td>'.$row["HonorsProgram"].'</td>
                        <td>'.$row["StudyAbroad"].'</td>
                        </tr>';
                }
              }
              else { echo "Error Nothing found in users table " + $admin_info; }
              ?>
            </tbody>
          </table>



<div class="container">
  <div class="main">
      <form class="form" method="post" action="#">
        <br></br>
        <h1>Item to edit</h1>
        <label class="containerg">Email address
          <input type="radio" checked="checked" name="fieldchange" id="fieldchange" value="Email">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Gender
          <input type="radio" name="fieldchange" id="fieldchange" value="Gender">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Service hours completed
          <input type="radio" name="fieldchange" id="fieldchange" value="ServiceHours">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Citizanship status
          <input type="radio" name="fieldchange" id="fieldchange" value="Citizanship">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Major
          <input type="radio" name="fieldchange" id="fieldchange" value="Major">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Sports played
          <input type="radio" name="fieldchange" id="fieldchange" value="Sports">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Honors Status
          <input type="radio" name="fieldchange" id="fieldchange" value="HonorsProgram">
          <span class="checkmark"></span>
        </label>

        <label class="containerg">Study Abroad option
          <input type="radio" name="fieldchange" id="fieldchange" value="StudyAbroad">
          <span class="checkmark"></span>
        </label>



        <br></br>
        <input type="text" name="thechange" id="thechange">
        <input type="button" name="makeedit" id="makeedit" value="Change">
      </form>
  </div>
</div>



</body>

</html>

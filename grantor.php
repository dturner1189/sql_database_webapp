<?php
include('DBconfig.php');
$userlogin = htmlspecialchars($_GET["id"]);

$result = $connect->query("SELECT *
                           FROM UserLogin
                           WHERE Username='$userlogin'");
?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="#"></script>

<head>
    <meta charset="UTF-8">
    <title>Grantor Page</title>
</head>

<body background="images/data.png" class="img-fluid">
  <h1>Heres what we have for you</h1>
    <table class="data-table">
      <caption class="title">Account Information</caption>

        <thead>
            <tr>
                <th>ID NUMBER</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>

          <?php
          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>
                  <td>'.$row["ID"].'</td>
                  <td>'.$row["Username"].'</td>
                  <td>'.$row["Password"].'</td>
                  </tr>';
                }
          }
          else {
            echo "Error Nothing found in users table " + $userlogin;
          }
          ?>
        </tbody>
      </table>

    </body>


</html>

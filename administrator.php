<?php
include('DBconfig.php');
$userlogin = htmlspecialchars($_GET["id"]);
$admin_info = $connect->query("SELECT *
                           FROM UserLogin u
                           WHERE u.Username='$userlogin'");
?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="administrator.js"></script>

<head>
    <meta charset="UTF-8">
    <title>DB Admin Page</title>
</head>

<body background="images/data.png" class="img-fluid">
  <h1>Users Info</h1>

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
            if ($admin_info->num_rows > 0) {
              while ($row = mysqli_fetch_assoc($admin_info)) {
                echo '<tr>
                      <td>'.$row["ID"].'</td>
                      <td>'.$row["Username"].'</td>
                      <td>'.$row["Password"].'</td>
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
        <label>Username of person you want to Delete:</label>
        <input type="text" name="user" id="user">
        <!-- Delete user Button    -->
        <input type="button" name="delete" id="delete" value="Delete This User">
      </form>
  </div>
</div>



</body>

</html>

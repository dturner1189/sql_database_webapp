<?php
include('DBconfig.php');
$userlogin = htmlspecialchars($_GET["id"]);

?>

<html lang="en">

<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="search.js"></script>
<script type="text/javascript" src="studentback.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Search Page</title>
</head>

<body background="images/data.png" class="img-fluid">
  <form class="form" method="post" action="#">
      <input type="button" name="back" id="back" value="Go Back">
  </form>

<div class="container">
  <div class="main">
      <form class="form" method="post" action="#">

          <h2>Run a search for scholarships:</h2>

          <label>By name: </label>
          <input type="text" name="sname" id="sname">

          <label>By Minimum GPA: </label>
          <br></br>
          <div class="slidecontainer">
            <input type="range" min="0" max="500" value="0" class="slider" id="hsgpa">
            <label for="hsgpa"> High School: <span id="minimumneeded"></span></label>
            <script>
                var slider = document.getElementById("hsgpa");
                var output = document.getElementById("minimumneeded");
                output.innerHTML = slider.value;

                slider.oninput = function() {
                  output.innerHTML = this.value / 100;
                }
            </script>
          </div>
          <br></br>

          <div class="slidecontainer">
            <input type="range" min="0" max="500" value="0" class="slider" id="cogpa">
            <label for="cogpa"> College: <span id="minimumneededcollege"></span></label>
            <script>
                var slider2 = document.getElementById("cogpa");
                var output2 = document.getElementById("minimumneededcollege");
                output2.innerHTML = slider2.value;

                slider2.oninput = function() {
                  output2.innerHTML = this.value / 100;
                }
            </script>
          </div>


          <h1>Gender: </h1>
          <label class="containerg">Female
            <input type="radio" checked="checked" name="gender" id="gender" value="0">
            <span class="checkmark"></span>
          </label>
          <label class="containerg">Male
            <input type="radio" name="gender" id="gender" value="1">
            <span class="checkmark"></span>
          </label>


          <h1>Family Income Level: </h1>
          <div class="slidecontainer">
            <input type="range" min="0" max="100000" value="0" class="slider" id="income">
            <label for="income"> Income: <span id="familyincome"></span> $</label>
            <script>
                var slider3 = document.getElementById("income");
                var output3 = document.getElementById("familyincome");
                output3.innerHTML = slider3.value;

                slider3.oninput = function() {
                  output3.innerHTML = this.value;
                }
            </script>
          </div>
        <br></br>

        <select id="prevcoll" name="prevcoll" style="width:97.7%;">
          <option value="NONE">Education Level:</option>
          <option value="H" >High School</option>
          <option value="A" >Associates</option>
          <option value="B" >Bachelors</option>
          <option value="M" >Masters</option>
          <option value="P">PHD</option>
        </select>

        <br></br>
          <div class="slidecontainer">
            <input type="range" min="0" max="800" value="0" class="slider" id="servhrs">
            <label for="servhrs"> Minimum service Hours: <span id="minservhrs"></span> Hours</label>
            <script>
                var slider4 = document.getElementById("servhrs");
                var output4 = document.getElementById("minservhrs");
                output4.innerHTML = slider4.value;

                slider4.oninput = function() {
                  output4.innerHTML = this.value;
                }
            </script>
          </div>


          <h1>Citizanship Requirements: </h1>
          <label class="containerg">For American Citizans only
            <input type="radio" checked="checked" name="citizan" id="citizan" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="containerg">Citizanship is not a requirement
            <input type="radio" name="citizan" id="citizan" value="0">
            <span class="checkmark"></span>
          </label>

          <br></br>
            <select name="sports" id="sports" style="width:97.7%;">
              <option value="NONE" name="sports" id="sports">Sports:</option>
              <option value="soccer" name="sports" id="sports">Soccer</option>
              <option value="football" name="sports" id="sports">Football</option>
              <option value="swimming" name="sports" id="sports">Swimming</option>
              <option value="dance" name="sports" id="sports">Dance</option>
              <option value="track" name="sports" id="sports">Track</option>
            </select>

          <br></br>
            <select id="major" name="major" style="width:97.7%;">
              <option value="NONE">Major:</option>
              <option value="Archeology">Archeology</option>
              <option value="Biology">Biology</option>
              <option value="CS">Computer Science</option>
              <option value="Dance">Dance</option>
              <option value="Educadion">Educadion</option>
              <option value="French">French</option>
              <option value="Geology">Geology</option>
              <option value="Heptology">Heptology</option>
              <option value="Informaition">Informaition</option>
              <option value="Jamacian studys">Jamacian studys</option>
            </select>


      <script type="text/javascript" src="dropmenu.js">  </script>

      <h1>Honors Program Status: </h1>
          <label class="containerg">In an Honors program
            <input type="radio" checked="checked" name="honors" id="honors" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="containerg">Not for Honors only
            <input type="radio" name="honors" id="honors" value="0">
            <span class="checkmark"></span>
          </label>

      <h1>Study Abroad Requirement: </h1>
          <label class="containerg">For overseas students
            <input type="radio" checked="checked" name="studyabroad" id="studyabroad" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="containerg">Not required
            <input type="radio" name="studyabroad" id="studyabroad" value="0">
            <span class="checkmark"></span>
          </label>

          <!-- Search = Button    -->

          <input type="button" name="search2" id="search2" value="Search for Scholarship">
      </form>
  </div>
</div>

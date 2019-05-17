<?php include('DBconfig.php'); ?>

<html lang="en">
<link rel="stylesheet" href="login.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="newuser.js"></script>

<head>
    <meta charset="UTF-8">
    <title>New User sign up</title>
</head>

<body background="images/fsu.png" class="img-fluid">

<div class="container">
    <div class="main">
        <form class="form" method="post" action="#">
            <h2>Lets get you set up.</h2>
            <p><span class="error">* means required field</span></p>

            <!-- Required fields name, username, password, password verify -->
            <span class="error">* </span>
            <label>Whats your name :</label>
            <input type="text" name="name" id="name">

            <span class="error">* </span>
            <label>Desired Username :</label>
            <input type="text" name="user" id="user">

            <span class="error">* </span>
            <label>Password :</label>
            <input type="password" name="pass" id="pass">

            <span class="error">* </span>
            <label>Re-enter-Password :</label>
            <input type="password" name="repass" id="repass" >


            <!-- Non required entries -->
            <label>High School gpa (ie 3.23)</label>
            <input type="text" name="hsgpa" id="hsgpa">

            <label>College gpa, 0 if never attended</label>
            <input type="text" name="collgpa" id="collgpa">

            <label>Do you play sports? Enter it here</label>
            <input type="text" name="sports" id="sports">

            <label>prospective Major</label>
            <input type="text" name="major" id="major">

            <label>Email</label>
            <input type="text" name="email" id="email">

            <label>Gender</label>
              <br></br>
                <input type="radio" name="gender" id="gender" value="Male" checked> Male<br>
                <input type="radio" name="gender" id="gender" value="Female"> Female<br>
              <br></br>

            <label>Family Income if under 24, or Personal Income</label>
            <input type="text" name="income" id="income">

            <label>Previous College</label>
            <br></br>
              <input type="radio" name="prevcoll" id="prevcoll" value="NONE" checked> None<br>
              <input type="radio" name="prevcoll" id="prevcoll" value="AA"> Associates in Arts<br>
              <input type="radio" name="prevcoll" id="prevcoll" value="AS"> Associates in Science<br>
              <input type="radio" name="prevcoll" id="prevcoll" value="BA"> Bachelors in Arts<br>
              <input type="radio" name="prevcoll" id="prevcoll" value="BS"> Bachelors in Science<br>
              <input type="radio" name="prevcoll" id="prevcoll" value="MSMA"> Masters degree<br>
              <input type="radio" name="prevcoll" id="prevcoll" value="PHD"> Doctorete / Post Doc<br>
            <br></br>

            <label>Service Hours accomplished</label>
            <input type="text" name="servhrs" id="servhrs">

            <label>Are you an American Citizan?</label>
              <br></br>
                <input type="checkbox" name="citizan" id="citizan" value="citizan"> I am an American Citizan<br>
              <br></br>

            <label>Are you in an honors program?</label>
              <br></br>
                <input type="checkbox" name="honors" id="honors" value="honors"> I am in an Honors Program<br>
              <br></br>

            <label>Are you a study abroud student?</label>
              <br></br>
                <input type="checkbox" name="studyabroad" id="studyabroad" value="studyabroad"> I am in a Study Abroad Program<br>
            <br></br>

            
            <!-- SUBMIT BUTTON -->
            <input type="button" name="make" id="make" value="Make an Account">
        </form>
        <!--END OF FILLING FORM -->

    </div>
</div>


</body>
</html>

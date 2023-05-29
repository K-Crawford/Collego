<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="login.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body class="loginBackground">
    <!-- nav bar -->
    <nav class="nav-bar">
      <li class="nav-logo">
        <a href="index.php"><img class = "collegoNavBar" src="collegoLogo.png"</a>
      </li>
      <div class="textButtons">
        <li class="nav-extracurriculars">
          <a class = "navBarLinks" href="ECs.html">extracurriculars</a>
        </li>
        <li class="nav-extracurriculars">
          <a class = "navBarLinks" href="scholarships.html">scholarships</a>
        </li>
        <li class="nav-extracurriculars">
          <a class = "navBarLinks" href="colleges.html">colleges</a>
        </li>
        <li class="nav-extracurriculars">
          <a class = "navBarLinks" href="login.php">login</a>
        </li>
      </div>
    </nav>
    <!-- end of nav bar -->
    <script src="script.js"></script>
    <p class ="signUpHeader" >Sign Up</p>
    <div class = "centerForm">
      <form class="signUp" method="post">
        <label class="signUp" >Username:</label><br>
        <input class="signUp" type="text" name="chooseUsername"><br><br>
        <label class="signUp" >Password:</label><br>
        <input class="signUp" type="text" name="choosePassword"><br><br>
        <input class="submitButton" type="submit" name="submit">
      </form>
    </div>
  </body>
</html>


<?php
              
if(isset($_POST['chooseUsername']))
{
$dataOne =$_POST['chooseUsername'];
$fpOne = fopen('username.txt', 'a');
fwrite($fpOne, $dataOne);
fwrite($fpOne, ",");
fclose($fpOne);
}

if(isset($_POST['choosePassword']))
{
$dataTwo =$_POST['choosePassword'];
$fpTwo = fopen('passwords.txt', 'a');
fwrite($fpTwo, $dataTwo);
fwrite($fpTwo, ",");
fclose($fpTwo);
}
?>
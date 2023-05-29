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
    <li>
      <a class = "signUpOne" href="signUp.php">Sign Up</a>
    </li>
    <div class="centerForm">
      <p class ="signUpHeader" >Login</p>
      <form class="signUp">
        <label class="signUp">Username:</label><br>
        <input class="signUp" type="text" name="userId"><br><br>
        <label class="signUp">Password:</label><br>
        <input class="signUp" type="text" name="userPassword"><br><br>
        <input class = "submitButton" type="submit" name="submit" onclick="return checkId();">
      </form>
    </div>
  </body>
</html>


<script type="text/javascript">

<?php 
$user_info = file_get_contents('user_info.txt');
$user_id = file_get_contents('username.txt');
$user_passwords = file_get_contents('passwords.txt');
?>

var user_id_content = "<?php echo $user_id; ?>";
var user_info_content = "<?php echo $user_info; ?>";
var user_password_content = "<?php echo $user_passwords; ?>";
var idArray = user_id_content.split(",");
var infoArray = user_info_content.split("|");
var passwordArray = user_password_content.split(",")

function checkId() {
  var current_username = $('input[name="userId"]').val();
  var current_password = $('input[name="userPassword"]').val();

  var getUsernameIndex = idArray.indexOf(current_username);
  var getPasswordIndex = passwordArray.indexOf(current_password);

  if (getUsernameIndex === -1) {
    alert("The username you provided is incorrect. Please try again.");
  }
  else {
    if (getPasswordIndex === -1) {
      alert("The password you provided is incorrect. Please try again.");
    }
    else {
      if (getUsernameIndex === getPasswordIndex) {
        var current_data = infoArray[getUsernameIndex];
        alert("You are now signed in, " + current_username + "!");
      }
      else {
        alert("Your username or password is incorrect. Please try again.");
      }
    }
  }
}

</script>
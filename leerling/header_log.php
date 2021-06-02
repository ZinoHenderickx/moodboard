<?php
session_start();
include "../style/header.css";
include "../database/dbmoodboard.php";
?>

<body>
<head>

<div class="header">
<div class="headerLeft">
<ul>
  <li><a href="home.php" class="active">Home</a></li>
  <li><a href="personal_info_lln.php" class="active">Personal Info</a></li>
  <li><a href="values.php" class="active">Stats</a></li>
  <li><a href="logging_lln.php" class="active">Logging</a></li>
  </ul>
</div>

<div class="headerRight">
  <ul>
  <?php if ((!isset($_SESSION["UserID"]))||($_SESSION["UserID"]=="")) {
  echo "<a href='login.php' style='color:white'>Login</a>";
} else {
   
  echo "<li><a href='logout.php' style='color:white'>Uitloggen (".$_SESSION["FirstName"].")</a></li>";
}
?>

</ul>
</div>
</div>
</body>
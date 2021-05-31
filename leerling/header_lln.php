<?php
session_start();
include "../stijlen/header.css";
?>
<body>
<head>

<div class="header">
<div class="headerLeft">
<ul>
  <li><a href="home_lln.php" class="active">Home</a></li>
  <li><a href="personal_info_lln.php" class="active">Personal Info</a></li>
  <li><a href="values_lln.php" class="active">Stats</a></li>
  </ul>
</div>

<div class="headerRight">
  <ul>
  <?php if ((!isset($_SESSION["UserID"]))||($_SESSION["UserID"]=="")) {
  echo "<a href='login_lln.php' style='color:white'>Login</a>";
} else {
   
  echo "<li><a href='logged_out_lln.php' style='color:white'>Uitloggen (".$_SESSION["FirstName"].")</a></li>";
}
?>

</ul>
</div>
</div>
</body>
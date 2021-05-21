<?php
session_start();
include "header.css";
?>
<body>
<head>

<div class="header">
<div class="headerLeft">
<ul>
  <li><a href="moodboard_home.php" class="active">Home</a></li>
  </ul>
</div>

<div class="headerRight">
  <ul>
  <?php if ((!isset($_SESSION["UserID"]))||($_SESSION["UserID"]=="")) {
  echo "<a href='login_llk.php' style='color:white'>Login</a>";
} else {
   
  echo "<li><a href='logged_out.php' style='color:white'>Uitloggen (".$_SESSION["Email"].")</a></li>";
}
?>

</ul>
</div>
</div>
</body>
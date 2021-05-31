<?php
session_start();
include "../stijlen/header.css";
?>
<body>
<head>

<div class="header">
<div class="headerLeft">
<ul>
  <li><a href="home_llk.php" class="active">Home</a></li>
  </ul>
</div>

<div class="headerRight">
  <ul>
  <?php if ((!isset($_SESSION["UserID"]))||($_SESSION["UserID"]=="")) {
  echo "<a href='login_llk.php' style='color:white'>Login</a>";
} else {
   
  echo "<li><a href='logged_out_llk.php' style='color:white'>Uitloggen (".$_SESSION["Email"].")</a></li>";
}
?>

</ul>
</div>
</div>
</body>
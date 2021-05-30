<?php
session_start();
include "../stijlen/header.css";
?>
<body>
<head>

<div class="header">
<div class="headerLeft">
<ul>
  <li><a href="admin_home.php" class="active">Home</a></li>
  <li><a href="admin_accounts.php" class="active">Accounts</a></li>
  <li><a href="admin_waardes.php" class="active">Waardes</a></li>
  </ul>
</div>

<div class="headerRight">
  <ul>
  <?php if ((!isset($_SESSION["UserID"]))||($_SESSION["isAdmin"]=="")) {
  echo "<a href='login_llk.php' style='color:white'>Login</a>";
} else {
   
  echo "<li><a href='logged_out_llk.php' style='color:white'>Uitloggen (".$_SESSION["name"].")</a></li>";
}
?>

</ul>
</div>
</div>
</body>
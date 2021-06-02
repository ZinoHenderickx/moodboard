<?php
session_start();
include "../styles/header.css";
?>
<body>
<?php
require("../database/dbusers.php");
if(empty($_SESSION['isAdmin']))
{
    header("Location: admin_login.php");
    die("Redirecting to admin_login.php");
}?>
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
  echo "<a href='admin_login.php' style='color:white'>Login</a>";
} else {
   
  echo "<li><a href='admin_logout.php' style='color:white'>Uitloggen (".$_SESSION["name"].")</a></li>";
}
?>

</ul>
</div>
</div>
</body>
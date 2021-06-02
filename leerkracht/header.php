<?php
session_start();
include "../styles/header.css";
include "../database/dbmoodboard.php";
?>
<?php
if(empty($_SESSION['Email']))
{
    header("Location: login.php");
    die("Redirecting to login.php");
}?>
<body>
<head>

<div class="header">
<div class="headerLeft">
<ul>
  <li><a href="home.php" class="active">Home</a></li>
  <li><a href="values.php" class="active">Emoties leerlingen</a></li>
  <li><a href="classinfo.php" class="active">Klasinfo</a></li>
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
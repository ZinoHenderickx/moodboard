<?php
session_start(); // Right at the top of your script
// include "checklogin.php";
// include "logged_in.php";
// include "logged_out.php";
?>
<?php
if($count==1)
{
  $_SESSION['Email']=true;
  $_SESSION['Email']=$Email;
  header("Location: moodboard/login/checklogin.php");
  exit();
}
else
{
   $_SESSION['Email']=false;
   header("Location: login_lln.php");
   exit();
}
?>

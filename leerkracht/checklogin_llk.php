<?php
session_start(); // Right at the top of your script
?>
<?php
if($count==1)
{
  $_SESSION['Email']=true;
  $_SESSION['Email']=$Email;
  header("Location: home_llk.php");
  exit();
}
else
{
   $_SESSION['Email']=false;
   header("Location: login_llk.php");
   exit();
}
?>
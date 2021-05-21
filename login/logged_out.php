<?php
   session_start();
   unset($_SESSION["Email"]);
   unset($_SESSION["Password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = moodboard/loginlogin_lln.php');
?>
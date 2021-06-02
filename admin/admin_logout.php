<?php
   session_start();
   unset($_SESSION["Email"]);
   unset($_SESSION["Password"]);
   unset($_SESSION['isAdmin']);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = admin_login.php');
?>
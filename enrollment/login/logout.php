<?php

   session_start();
   if (!empty($_SESSION['login_user'])) {
   	unset($_SESSION['login_user']);
   }
   session_destroy();
   var_dump(session_id());
   //e();
   header("Location: /logic/login.php");
   #if(session_destroy()) {
   #   header("Location: /logic/login.php");
   #}
?>
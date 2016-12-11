<?php
   include('../logic/main.php');
   session_start();
   $db = new DatabaseConnect();
   $user_check = $_SESSION['login_user'];

   $select = "select username from admin where username = '$user_check' ";
   
   $ses_sql = mysqli_query($db->connection, $select);
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>
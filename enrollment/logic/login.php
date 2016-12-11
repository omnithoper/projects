<?php
   #require  'main.php';  
session_start();     
    
   #session_start();
   define('BASE_PATH', __DIR__.'/../');
   require_once("method-post.php");
   require 'connect-db.php'; 
   require '../classes/admin.php'; 

   $myusername = Request::getParam('username');
   $mypassword = Request::getParam('password'); 
   $adminObject = new Admin();
   $result = $adminObject->getUserPassword($myusername, $mypassword); 

   require '../lib/smarty/Smarty.class.php'; 
   $smarty = new Smarty();
   $smarty->template_dir = '../login/';
   $smarty->compile_dir = '../compile/';

   $smarty->assign('msg', $result['error']);
   if (!empty($result['error'])) {
      $smarty->assign('msg', $result['error']);
   }
   $smarty->display('login.tpl');

   if (empty($_SESSION['login_user'])) {

      if ($_SERVER['REQUEST_URI'] != '/logic/login.php') {
         header('Location: /logic/login.php');
      }
   } else {
      header('Location: /');
   }

?>
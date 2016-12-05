<?php

require  'main.php';  
require '../classes/admin.php';
require '../lib/smarty/Smarty.class.php';
$msg = NULL;
   
$adminObject = new Admin();
if (isset($_POST['login'])) {
   
   $userName = Request::getParam('username');
   $password = Request::getParam('password');
   $result = $adminObject->getUserPassword($userName, $password);  

   if ($userName == $result['username'] &&  $password == $result['password']) {
      header("Location: /");   
   }else {
      $msg = 'Wrong username or password';
   }
}

   $smarty = new Smarty();
   $smarty->template_dir = '../login/';
   $smarty->compile_dir = '../compile/';

   $smarty->assign('msg', $msg);
   $smarty->display('login.tpl');

?>
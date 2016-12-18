<?php
/* Smarty version 3.1.30, created on 2016-12-18 18:06:28
  from "C:\Users\omnithopter\Documents\projects\enrollment\login\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5856d024e4e122_01509616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37caa483393354240630b7479908954d91bd17c0' => 
    array (
      0 => 'C:\\Users\\omnithopter\\Documents\\projects\\enrollment\\login\\login.tpl',
      1 => 1481994545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5856d024e4e122_01509616 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
   <head>
  <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="/css/mystyles.css" />
   </head>
   <body>
      <nav id="searchStudent"> 
         <div id = "container">
               <h2>Enter Username and Password</h2>
         <form method = "post" action="/login/login">
            <?php if ((!empty($_smarty_tpl->tpl_vars['msg']->value))) {?>
            <h4 class = "form-signin-heading"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h4>
            <?php }?>
            <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus></br>
            <input type = "password" class = "form-control" name = "password" placeholder = "password" required autofocus>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
               
      </div> 
   </nav>   
   </body>
</html><?php }
}

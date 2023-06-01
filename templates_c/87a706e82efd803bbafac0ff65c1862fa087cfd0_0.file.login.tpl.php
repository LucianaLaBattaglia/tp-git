<?php
/* Smarty version 4.3.1, created on 2023-05-28 22:41:21
  from 'C:\xampp\htdocs\tpespecial-tio\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6473bc717cc8d7_25166105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a706e82efd803bbafac0ff65c1862fa087cfd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial-tio\\templates\\login.tpl',
      1 => 1685306473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473bc717cc8d7_25166105 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
  <h3><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
    <h1 id = "title-login">Login</h1>
    
    <div id="container-form">
        <p id = "text-login">Ingresa tu nombre de usuario y contraseña en los campos correspondientes a continuación. 
            Si aún no tienes una cuenta con nosotros, puedes registrarte haciendo clic en el enlace "Regístrate" 
            para disfrutar de todos nuestros servicios y beneficios.
        </p>

        <h2>Iniciar Sesión</h2>
     
  
        <form id = "form-login" action="login" method="POST">
          <label for="user">Usuario</label>
          <input type="text" id="input-user" name="user" required>
          
          <label for="password">Contraseña</label>
          <input type="password" id="input-password" name="password" required>
          
          
          <input id = "button-submit" type="submit" value="Iniciar Sesión">
        </form>
        
    </div>
    

  </body>
</html><?php }
}

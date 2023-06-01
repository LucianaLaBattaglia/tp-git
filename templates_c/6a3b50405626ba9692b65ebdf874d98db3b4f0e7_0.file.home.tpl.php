<?php
/* Smarty version 4.3.1, created on 2023-05-28 05:34:01
  from 'C:\xampp\htdocs\tpespecial-tio\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6472cba9494987_75792287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a3b50405626ba9692b65ebdf874d98db3b4f0e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial-tio\\templates\\home.tpl',
      1 => 1685244753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6472cba9494987_75792287 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    <title>HOME</title>
  </head>
  <body>
    <h1 id = "title-login">Hello
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    
    </h1>

    <div id="container-form">
        
         
    </div>
  </body>
</html><?php }
}

<?php

require_once './libs/Smarty.class.php';

class login_view
{

    
    function mostrar($mensaje=''){
        $smarty= new Smarty();
        $smarty-> assign('title', "LOGIN");
        $smarty-> assign('mensaje', $mensaje);
        $smarty-> display ('templates/login.tpl');
    }

    function mostrar_home( $user){
        $smarty= new Smarty();
        $smarty-> assign('user', $user);
        $smarty-> display ('templates/home.tpl');
    }








}

?>
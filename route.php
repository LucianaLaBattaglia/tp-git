<?php
include 'model/login_model.php';
include 'controller/login_controller.php';

$controller= new login_controller();
$parteURL= explode("/", $_GET["action"]);


if($parteURL[0]==""){
    $controller->login();
}if ($parteURL[0]=="login"){
    $controller->home();
}


?>
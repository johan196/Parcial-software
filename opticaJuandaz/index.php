<?php

require_once "vendor/session.php";
require_once "vendor/Connection.php";

if(isset($_SESSION,$_SESSION['pers_id']) and $_SESSION['auth']=='OK')
{
    require_once "vendor/FrontController.php";
    
    if(isset($_GET['route']))
    {
        $route=$_GET['route'];
    }
    else
    {
        $route=''; 
    }
    
    $FrontController=new FrontController($route);
}
else if(isset($_POST['email'],$_POST['password']))
{
    require_once "controllers/loginController.php";
    $loginController=new loginController();
    $loginController->validateFormSession($_POST);   
}
else
{
    require_once "controllers/loginController.php";
    $loginController=new loginController();
    $loginController->validateUrl(); 
}

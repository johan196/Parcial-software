<?php
require_once "models/loginModel.php";
require_once "views/loginView.php";

class loginController
{
    function validateUrl() 
    {
        $loginView=new loginView();
        $loginView->showFormSession();
    }
    
    function validateFormSession($array)
    {
        $connection=new connection('sel');
         
        $email=$array['email'];
        $password=$array['password'];

        
        if(empty($email)){exit("El correo es obligatorio");}
        if(empty($password)){exit("La clave es obligatoria");}
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){exit("Correo mal estructurado");}

        $loginModel=new loginModel($connection);

        $array_access=$loginModel->sqlFormSession($email,$password);

        if($array_access)
        {
            $_SESSION['pers_id']=$array_access[0]->pers_id;
            $_SESSION['auth']='OK'; 
        }

        header('Location: index.php');
    }

    function closeSession()
    {
        $array_response=array();

        session_unset();
        session_destroy();
        $_SESSION = array();

        $array_response['message']='Sesión finalizada';

        exit(json_encode($array_response));
    }
}
?>
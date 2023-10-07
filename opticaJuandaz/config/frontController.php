
<?php
class frontController
{
    function __construct($route)
    {
        if($route)
        {
            list($class,$method)=explode('/',$route);         
        }
        else
        {
            $class="menuController";
            $method="validateMenu";
        }

        require_once "controllers/$class.php";

        $instance=new $class();
        $instance->$method();    
    }
}
?>
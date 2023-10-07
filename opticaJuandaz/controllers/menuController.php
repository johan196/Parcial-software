<?php
require_once "Views/menuView.php";
class menuController
{
    private $rol;
    public function __construct($rol) {
        $this->rol = $rol;
    }
    
    function validateMenu()
    {
        $menuView=new menuView(); 
        $menuView->showMenu();
    }
}
?>
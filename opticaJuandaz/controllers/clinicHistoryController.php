<?php
require_once "views/clinicHistoryView.php";
    
class clinicHistoryController
{ 
    function paginateClinicHistory()
    {
        $clinicHistory=new clinicHistory();
        $clinicHistory->paginateClinicHistory();  
    }
}
?>
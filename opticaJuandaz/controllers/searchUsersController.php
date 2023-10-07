<?php
require_once "views/searchUsersView.php";
require_once "models/searchUsersModel.php";

class searchUsersController
{
    function paginateSearchUsers()
    {
        $connection=new connection('sel');
        $searchUsersModel=new searchUsersModel($connection);
        $searchUsersView=new searchUsersView();

        $searchUsersView->paginateSearchUsers();
    }
}

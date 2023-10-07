<?php
class searchUsersModel
{
    private $connection;
    function __construct($connection)
    {
        $this->connection=$connection;
    }
}
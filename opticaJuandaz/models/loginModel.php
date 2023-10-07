<?php
class loginModel
{
    private $connection;
    
    function __construct($connection)
    {
        $this->connection=$connection; 
    }
    
    function sqlFormSession($email,$password)
    {
        $sql="SELECT * FROM access 
              WHERE acce_email='$email' 
              AND acce_password='$password'
              ";

        $this->connection->query($sql);

        return $this->connection->fetchAll();
    }
}
?>
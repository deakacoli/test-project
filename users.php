<?php

require_once ('databaseRegister.php');



class KyquUsers{
    private $connection;


    function __construct(){
        $conn = new dbConnect;
        $this->connection = $conn->connectDB();
    }


    function getUsersEmaildheFjalekalimi(){
        $conn = $this->connection;


        $sql = "SELECT email,fjalkalimi,role from regjistrohu";
        $statement = $conn->query($sql);
        $usersLogin = $statement->fetchAll();

        return $usersLogin;
    }
}


?>
<?php
class dbConnect{
    private $conn =null;
    private $host = 'localhost';
    private $dbname = 'kontakti';
    private $username = 'root';
    private $password = '';

     public function connectDB(){

        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
                                    $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
            $this->conn->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
       
            
         // echo "Lidhja me: {$this->dbname} - {$this->host}: eshte realizuar me sukses!";
        } catch (PDOException $pdoe) {
            die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
        }
        return $this->conn;
     }
}

$link = new dbConnect();
$link ->connectDB();

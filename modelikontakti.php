<?php

require_once ('connectKontakti.php');

class kontakti extends dbConnect{
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $number;
    private $message;
    private $dbconn;

    public function __construct($id='',$name='',$lastname='',$email='',$number='',$message='')
    {
    $this ->id=$id;
    $this ->name=$name;
    $this ->lastname=$lastname;
    $this ->email=$email;
    $this ->number=$number;
    $this ->message=$message;
  
    $this ->dbconn=$this ->connectDB();
    }
 
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    

    public function setName($name){
        $this ->name=$name;
    }
    public function getName(){
        return $this ->name;
    }

    public function setLastname($lastname){
        $this ->lastname=$lastname;
    }
    public function getLastname(){
        return $this ->lastname;
    }

    public function setEmail($email){
        $this ->email=$email;
    }
    public function getEmail(){
        return $this ->email;
    }

    public function setNumber($number){
        $this ->number=$number;
    }
    public function getNumber(){
        return $this ->number;
    }


    public function setMessage($message){
        $this ->message=$message;
    }
    public function getMessage(){
        return $this ->message;
    }

  

    public function readData(){
        $query = $this->dbconn->query('SELECT * from kontakti');

        return $query->fetchAll();
    }
    public function insertoDhenat(){
        $sql="INSERT INTO kontakti (name,lastname,email,number,message) VALUES (:name,:lastname,:email,:number,:message)";
         $stm=$this ->dbconn ->prepare ($sql);
         $stm ->bindParam(':name',$this->name);
         $stm ->bindParam(':lastname',$this->lastname);
         $stm ->bindParam(':email',$this->email);
         $stm ->bindParam(':number',$this->number);
         $stm ->bindParam(':message',$this->message);

         $stm ->execute();
 
          echo "<script>
          alert('Dërgimi i mesazhit është realizuar me sukses!');
         document.location='Kontakti.php';
          </script>";
     }


     public function delete($id){
      $query = $this->dbconn->prepare('DELETE from kontakti WHERE id=:id');
      $query->bindParam(':id', $id);
      $query->execute();

      return header("Location: kontaktiDashboard.php");
  }
}

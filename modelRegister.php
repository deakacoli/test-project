<?php

require_once ('databaseRegister.php');

class regjistrohu extends dbConnect{
    private $id;
    private $emri;
    private $mbiemri;
    private $email;
    private $fjalkalimi;
    private $dbconn;

    public function __construct($id='',$emri='',$mbiemri='',$email='',$fjalkalimi='')
    {
    $this ->id=$id;
    $this ->emri=$emri;
    $this ->mbiemri=$mbiemri;
    $this ->email=$email;
    $this ->fjalkalimi=$fjalkalimi;
  
    $this ->dbconn=$this ->connectDB();
    }
 
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setEmri($emri){
        $this ->emri=$emri;
    }
    public function getEmri(){
        return $this ->emri;
    }

    public function setMbiemri($mbiemri){
        $this ->mbiemri=$mbiemri;
    }
    public function getMbiemri(){
        return $this ->mbiemri;
    }

    public function setEmail($email){
        $this ->email=$email;
    }
    public function getEmail(){
        return $this ->email;
    }

    public function setFjalkalimi($fjalkalimi){
        $this ->fjalkalimi=$fjalkalimi;
    }
    public function getFjalkalimi(){
        return $this ->fjalkalimi;
    }



    public function insertoDhenat(){
       $sql="INSERT INTO regjistrohu (emri,mbiemri,email,fjalkalimi) VALUES (:emri,:mbiemri,:email,:fjalkalimi)";
        $stm=$this ->dbconn ->prepare ($sql);
        $stm ->bindParam(':emri',$this->emri);
        $stm ->bindParam(':mbiemri',$this->mbiemri);
        $stm ->bindParam(':email',$this->email);
        $stm ->bindParam(':fjalkalimi',$this->fjalkalimi);


        

        if(isset($_POST['save'])){
            // check if any field is empty
                if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) || empty($_POST['fjalkalimi'])){
                echo "<script>
                     alert('Ju lutem plotësoni të gjitha hapsirat e zbrazëta!');
                    window.location.href = 'regjistrohu.php';
                </script>";
                }else{
                
                    $stm ->execute();
                }
        }



         echo "<script>
         alert('Te dhenat jane regjistruar me sukses');
         document.location='kycu.php';
         </script>";
    }
    public function lexoDhenat()
    {
    $sql="SELECT * FROM regjistrohu";
    $stm=$this->dbconn->prepare($sql);
     
    $stm->execute();
  $rezultati= $stm->FETCHALL(PDO::FETCH_ASSOC); 

   return $rezultati;
    }
public function lexoDhenatSipasIDs($id){
    $sql = 'SELECT * FROM regjistrohu where id=:id';

    $stm=$this->dbconn->prepare($sql);
    $stm->execute([':id'=>$this->id=$id]);
    $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
    return $rezultati;
}

    public function updateDhenat(){
        $sql='UPDATE regjistrohu SET emri=?,mbiemri=?,email=?,fjalkalimi=? where id=?';

            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->emri,$this->mbiemri,$this->email,$this->fjalkalimi,$this->id]);
    }
   
    public function deleteDhenat($id){
        $sql="DELETE FROM regjistrohu where id=:id";
        $stm=$this->dbconn->prepare($sql);
        $stm ->bindParam(':id',$id);
        $stm ->execute();
        if($stm == true){
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='dashboardRegister.php';
            </script>";
        }else{
            return false;
        }
        }

  

    }


//$test = new regjistrimi ();
//$test ->insertoDhenat();
?>













































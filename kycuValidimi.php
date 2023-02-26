<?php
include_once 'users.php';

if(isset($_POST['login'])){
    if(empty($_POST['email']) || empty($_POST['fjalkalimi'])){

        echo "<script>
         alert('Please fill all fields!');
         document.location='kycu.php';
         </script>";
   
    }else{
        $email = $_POST['email'];
        $fjalkalimi = $_POST['fjalkalimi'];
        $logInUsers = new KyquUsers();
        $users = $logInUsers->getUsersEmaildheFjalekalimi();
    
        $i=0;
        foreach($users as $user){
           $i++;
           if($email == $user['email'] && $fjalkalimi == $user['fjalkalimi']){

            session_start();

            $_SESSION['email']=$email;
            $_SESSION['fjalkalimi']=$fjalkalimi;
            $_SESSION['role']=$user['role'];


            header ("location:home.php");
            exit();


           }else{
            if($i == sizeOf($users)){
                
           echo "<script>
           alert('Username or password is incorrect!');
           document.location='kycu.php';
           </script>";
                exit();
            }
           }

        }
    }

}


?>

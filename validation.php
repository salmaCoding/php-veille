<?php
session_start();
require 'connexion.php';


if(isset($_POST['send'])){
      

    $nom =$_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
    if(empty($nom)){
        $error = 'Enter le Nom';
     header("Location:index.php?error=$error"); 

    }elseif( empty($prenom) ){
        $error = 'Enter le prenom';
    header("Location:index.php?error=$error");

  
  }elseif(empty($email)){
    $error = 'Enter email';
    header("Location:index.php?error=$error");
  
  }else{
  

    $stmt = $connection->prepare("SELECT * FROM student WHERE email= ? ");
    $stmt->execute(array($email));
    $data = $stmt->fetch(); //get data
    $rows = $stmt->rowCount(); // check row if email exist  
 
    if($rows > 0){
     $_SESSION['user']="user";
     $_SESSION['nom']= $data['nom'];
     header('location:cours.php');    
      
    }else{
        $error= "pas trouvé ";
     header("Location:index.php?error=$error");
    
    }
    } 
  }
   
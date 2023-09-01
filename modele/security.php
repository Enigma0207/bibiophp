<?php
session_start();
require_once "../inc/db_connexion.php";

if(isset($_POST["connexion"])){
    $email = $_POST['email'];
    $passeword1 = $_POST['passeword'];
    $connexion = dbConnexion();
    $connexionRequest = $connexion->prepare("SELECT * FROM userphp WHERE email = ?");
    $connexionRequest->execute(array($email));
    $utilisateur =$connexionRequest->fetch(PDO::FETCH_ASSOC);

    if(empty ($utilisateur)){
         $_SESSION["error"] = "utilisateur inconnu";
         header("Location: ../connexion.php");
    }
     
    else {
         if (password_verify($passeword1, $utilisateur["passeword"])){
        $_SESSION["id"] = $utilisateur["id"];
        $_SESSION["email"] = $utilisateur["email"];
        setcookie('id_user', $utilisateur['id'], time() +3600, '/', 'localhost', false , true);
        header("Location: ../profil.php");


         }else {

            echo "Mot de passe incorrect";

          
       
       }

    }

    }

     
   
    ?>
<?php
require_once('../inc/db_connexion.php');
require_once('../inc/function.php');
// debug_($_POST);
// debug_($_GET);
// debug_($FILES);
// pour tester si le formulaire est bien pris en charge dans la bdd avant de faire if(isset...)
// var_dump($_POST);
 if(isset($_POST['enregistrer'])){
    //  récupérer des données saissies par l'utilisateur
debug($_POST['enregistrer']);
die;
    
    $nom = htmlspecialchars ($_POST['firstname']);
    $prenom = htmlspecialchars ($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars ($_POST['message']);
    $civility = htmlspecialchars($_POST['civility']);
    $phone = htmlspecialchars($_POST["phone"]);
    $country = htmlspecialchars($_POST["country"]);
    if (isset($_POST["condition"])) {
      $condition = htmlspecialchars($_POST["condition"]);
    }else {
        echo 'veillez cocher la case condition';
    }
    
    $passeword = htmlspecialchars($_POST["passeword"]);
    $birthday = htmlspecialchars($_POST["birthday"]);
    $passewordCrack = password_hash($passeword, PASSWORD_DEFAULT); 
    $role ="ROLE_USER";

    $db = dbConnexion();// établir la connexion avec la db

   //  var_dump($db);
   // préparation de la requête
   $request =  $db->prepare("INSERT INTO userphp(civility,lastname , firstname ,email,passeword, country, phone,birthday, message, conditionner,role ) VALUES(?,?,?,?,?,?,?,?,?,?,?)");

   // éxécution de la requête

  try {// essayer d'enregistrer les info dans la table utilisateur
      $request->execute(array( $civility,$nom, $prenom, $email,$passeword, $country, $phone,$birthday ,$message, $condition ,$role));
  } catch (PDOExeption $e) {
     echo $e->getMessage();//afficher l'erreur sql génère
  }

    
 }
?>
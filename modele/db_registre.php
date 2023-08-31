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
// debug($_POST['enregistrer']);
// die;
    
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
    
    $birthday = htmlspecialchars($_POST["birthday"]);
    $passeword = htmlspecialchars($_POST["passeword"]);
    $passewordCrack = password_hash($passeword, PASSWORD_DEFAULT); 
    $role ="ROLE_USER";

    $db = dbConnexion();// établir la connexion avec la db

   //  var_dump($db);
   // préparation de la requête
   $request =  $db->prepare("INSERT INTO userphp(civility,lastname , firstname ,email,passeword, country, phone,birthday, message, conditionner,role ) VALUES(?,?,?,?,?,?,?,?,?,?,?)");

   // éxécution de la requête

  try {// essayer d'enregistrer les info dans la table utilisateur
      $request->execute(array( $civility,$nom, $prenom, $email,$passewordCrack, $country, $phone,$birthday ,$message, $condition ,$role));
  } catch (PDOExeption $e) {
     echo $e->getMessage();//afficher l'erreur sql génère
  }

    
 }
?>

<!-- POUR SES CONNECTER AU SITE AVEC BOUTON CONNEXION -->

<?php
if(isset($_POST['connexion'])){ 
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    // etablir la connexion avec la bd
    $connect = dbConnexion();
    // preparer la requete
    $connexionRequest = $connect->prepare("SELECT * FROM userphp WHERE email = ?");
    // executer la requete
    $connexionRequest->execute(array($email));
    // recupere le resultat de la requete
    $userphp = $connexionRequest->fetch(PDO::FETCH_ASSOC); // convertir le resultat de la requete en tableau pour le manipuler facilement 
    // echo "<pre>";
    // print_r($userphp);
    // echo "<pre>";

    if(empty($userphp)){ // si le tableau $userphp est vide
        echo "userphp inconnu...";
    }else{ // sinon
        // on verifie le birthday
        if(password_verify($birthday, $userphp['birthday'])){
            //creer les variable de session
            $_SESSION["id"] = $userphp['id_userphp'];
            $_SESSION["email"] = $userphp['email'];
            $_SESSION["img"] = $userphp['profil_img'];

            header("Location: accueil.php");

        }else{
            echo "birthday";
        }
    }
}
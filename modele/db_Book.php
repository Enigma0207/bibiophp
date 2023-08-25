<?php
require_once('../inc/db_connexion.php');
require_once('../inc/function.php');

 if(isset($_POST['enregistrer'])){
    //  recuperer des donnees saissie par l'utilisateur

    
    $nom = htmlspecialchars ($_POST['title']);
    $publication = htmlspecialchars ($_POST['publication']);
    $author = htmlspecialchars($_POST['author']);
    $stock = htmlspecialchars ($_POST['stock']);
   
    $db = dbConnexion();// etablir la connexion avec la db

   //  var_dump($db);
   // preparation de la requette
   $request =  $db->prepare("INSERT INTO book(title , publication ,author, stock) VALUES(?,?,?,?)");

   // execution de la requette

  try {// essayer d'enregistrer les info dans la table utilisateur
      $request->execute(array($nom, $publication, $author, $stock));
  } catch (PDOExeption $e) {
     echo $e->getMessage();//afficher l'erreur sql genere
  }

    
 }
?>
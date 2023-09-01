<?php
session_start();
require_once ('./inc/header.php');
;
?>
                  <!-- en cas de non connexion afficher moi ce message -->
                  <?php 
                  if(isset($_SESSION['error'])){ ?>
                    <div class="alert alert-danger" role="alert"> <p><?= $_SESSION['error']; ?></p></div>
                  <?php } ?>
              
                  <!-- en cas de connexion afficher moi ce message -->
                 
<form action="./modele/security.php" method="post">
               
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                 <div class="form-group">
                    <label for="prenom">password :</label>
                    <input type="password" class="form-control" id="passeword" name="passeword" required>
                </div>

                <button type="submit" name="connexion" class="valider">connexion</button>
</form>        
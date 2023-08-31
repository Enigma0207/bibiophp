<?php

require_once ('./inc/header.php');
;
?>

<form action="./modele/security.php" method="post">
    <div class="form-group">
                    <label for="prenom">password :</label>
                    <input type="password" class="form-control" id="passeword" name="passeword" required>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" name="connexion" class="valider">connexion</button>
</form>
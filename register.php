<?php

require_once ('./inc/header.php');
;
?>
    <div class="container">
    <button type="submit" class="btn btn-primary" name ='connexion'>connectez-vous</button>
            <h2>Formulaire de Contact</h2>

            <form action="./modele/db_registre.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Nom :</label>
                    <input type="text" class="form-control" id="prenom" name="lastname" required>
                </div>
                <div class="form-group">
                    <label for="prenom">password :</label>
                    <input type="text" class="form-control" id="passeword" name="passeword" required>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="birthday">birthday :</label>
                    <input type="date" class="form-control" id="email" name="birthday" required>
                </div>

                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label>Genre :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civility" id="homme" value="homme">
                        <label class="form-check-label" for="homme">Homme</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civility" id="femme" value="femme">
                        <label class="form-check-label" for="femme">Femme</label>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="tel">Tel</label>
                    <input class="form-check-input" type="number" id="tel" name="phone">
                </div>
                <div class="form-group">
                    <label for="pays">Pays :</label>
                    <select class="form-control" id="pays" name="country">
                        <option value="france">France</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="souscription" name="condition" value="oui">
                    <label class="form-check-label" for="souscription">condition générale</label>
                </div>

                <button type="submit" class="btn btn-primary" name ='enregistrer'>Envoyer</button>
            </form>
        </div>
        <?php
            require_once ('./inc/footer.php');
        ?>
 
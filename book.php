<?php

require_once ('./inc/header.php');
;
?>
 <form action="./modele/db_book.php" method="post">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" required class="form-control" >
            </div>
            <div class="form-group">
                <label for="publication">Publication :</label>
                <input type="date" id="publication" name="publication" required class="form-control" >
            </div>
            <div class="form-group">
                <label for="author">Auteur :</label>
                <input type="text" id="author" name="author" required class="form-control" >
            </div>
            <div class="form-group">
                <label for="stock">Stock :</label>
                <input type="number" id="stock" name="stock" required class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary" name ='enregistrer'>Ajouter</button>
        </form>

        <?php
            require_once ('./inc/footer.php');
        ?>
 

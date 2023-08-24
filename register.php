<?php

require_once ('./inc/function.php');
require_once ('./inc/header.php');
;
?>
    <main>
        <div class="container">
            <form action="traitement.php" method="POST" enctype="multipart/form-data">
                 <div class="banner">
                   <p>
                      <marquee behavior="scroll" direction="left">
                       salut KARIMA.
                      </marquee>
                    </p>
                 </div>
                 <label for="email"></label>
                 <input type="email" name="email"  placeholder="email"><br><br>
         
                 <label for="pseudo"></label>
                 <input type="text" name="pseudo" required placeholder="pseudo"><br><br>
         
                 <label for="motdepasse"></label>
                 <input type="password" name="motdepasse" placeholder="password"><br><br>
         
                 <label for="confirmermotdepasse"></label>
                 <input type="password" name="confirmermotdepasse" required placeholder="confirmerpassword"><br><br>
         
                 <label for="fichier"></label>
                 <input type="file" name="image" class="fichier" ><br><br>
         
                 <button type="submit" name="valider" class="valider">inscription</button>
            </form>
      </div>
    </main>
 
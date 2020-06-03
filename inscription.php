<?php include('serveur.php') ;?>
<html>
    <head>
        <title>Formulaire</title>
        <link rel="stylesheet" type="text/css" href="inscription.css">
        <script type="text/javascript">
            
            document.getElementById('input').required="Veuillez entrer cet élement";

        </script>
    </head>
    <body>
       
        <hr>
        </br>
        </br>
        </br>
        <form method="POST" action="inscription.php">
        <div class="wrapper">
                <div class="myform">
                    <div class="input-fields">
                        
                        <h1 class="titre2">Inscription</h1>
                        <hr>
                    </br>
                        <input type="text" id ="input" name="nom" class="input" placeholder="Nom" required="Veuillez entrer un nom">
                    </br>
                        <input type="text" class="input" name="prenom"placeholder="Prénom"></br>

                        <input type="text" class="input" name="email" placeholder="Email"></br>
                        <input type="text" class="input" name="phone" placeholder="Téléphone : (+237)"></br>

                        <input type="Password" class="input" placeholder="Password" name="password"></br>

                        <input type="Password" name="pwdconfirm" class="input" placeholder=" Confirm Password"></br>

                
                    </div>
        
                    <div class="msg">
                        <input type="submit" name="submit" value="S'INSCRIRE">
                    </div>
                    <p>
                        <a href="Connexion.php">Avez-vous déjà un Compte ?</a>
                         <a href="Connexion.php" class="lien">Se Connecter</a>
                    </p>
                    <p> 
                       
                    </p>
                 </div>
    
            </div>
        </form>
        <div 

        <div class="footer">
        <h2>&copy Avril 2020  | Leo Nguimdo All Rights Reserved</h2>
        <?php include('erreurs.php');  ?>
    </div>
    </body>

    </html>
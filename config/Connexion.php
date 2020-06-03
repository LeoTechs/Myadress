<?php 
include('serveur.php');
session_start();
if(isset($_POST['login'])){
    $erreurs = array();
// CONNEXION a la Base de Donneé
try{
  $bdd = new PDO('mysql:host=localhost;dbname=bd_contact;charset=utf8', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die(array_push($erreurs, "Erreur de connexion à la Base de Donneé"));
}

//recuperation des champs 
$login=$_POST['login']; 
 $mdp = $_POST['password']; 

$mdp=md5($mdp); 

$query = "SELECT * FROM user WHERE email='$login' AND password='$mdp'";

$resultat=$bdd->query($query); 
$nombre = $resultat->fetch();
if(count($nombre)>0){
 
    $_SESSION['login'] = $login;
          $_SESSION['success'] =  "You are now connected "; 
          header("location:member.php");
}

}





?>

<html>
    <head>
        <title>Formulaire</title>
        <link rel="stylesheet" type="text/css" href="form1.css">
    </head>
    <body>
        <div id="banner">
          
         <p>
            
            <img src="contact.jpg" width="120px">
        </p>
    </br>
          <p>
             <h1 class="titre">BIENVENUE SUR MY_Cont@cts</h1>
         </p>
        </div>
        <hr>
        </br>
        </br>
        </br>
        <form method="POST" action="Connexion.php">
        <div class="wrapper">
                <div class="myform">
                    <div class="input-fields">
                        <input type="email" name="login" class="input" placeholder="Login">
                    </br>
                        <input type="Password" name="password" class="input" placeholder="Password">
                
                    </div>
        
                    <div class="msg">
                        <input type="submit" name="login" value="CONNEXION">
                    </div>
                    <p>
                        <a href="#">Mot de Passe Oublié ?</a>
                         <a href="inscription.php" class="lien">S'Inscrire ?</a>
                    </p>
                    <p> 
                       
                    </p>
                 </div>
    
            </div>
        </form>
        <div class="footer">
        <h2>&copy Avril 2020  | Leo Nguimdo All Rights Reserved</h2>
    </div>
    </body>

    </html>
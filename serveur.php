<?php

 $erreurs = array();
try{
  $bdd = new PDO('mysql:host=localhost;dbname=bd_contact;charset=utf8', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die(array_push($erreurs, "Erreur de connexion à la Base de Donneé"));
}


if(isset($_POST['submit']))
{
 
 	$name = $_POST['nom'];
 	$prenom = $_POST['prenom'];
 	$email = $_POST['email'];
 	$phone = $_POST['phone'];
 	$pwd = $_POST['password'];
 	$pwdconfirm = $_POST['pwdconfirm'];

    //Vérification des champs et Sécurisation 

 	if(empty($name)){
 		array_push($erreurs, "Veuillez entrer un Nom"); 
 	}
    
    if(empty($prenom)){
    	array_push($erreurs, "Veuillez entrer un Prenom");
    }

    if(empty($email)){
    	array_push($erreurs, "Veuillez entrer une adrrese email");
    }
    
    if (empty($phone)) {
    	array_push($erreurs, "Veuillez entrer un Numéro de telephone");
    }

    if(empty($pwd)){
    	array_push($erreurs, "Veuillez entrer un mot de passe");
    }

    if($pwd!=$pwdconfirm){
    	array_push($erreurs, "Les deux mots de passe ne Correspondent pas ");
    }

    // On vérifie si tout s'est bien passé 
    if(count($erreurs) ==0){

    	 $password=md5($pwd); //Chiffrement du Mot de passe en Md5
         
         //Ajout de l'utilisateur à la base de donneé

         $requete="INSERT INTO `user` (`nom`, `prenom`, `email`, `password`, `telephone`) VALUES (?, ?, ?, ?, ?)";


         $req=$bdd->prepare($requete); // Préparation de la requête 
         $req->execute(array($name, $prenom, $email, $password, $phone)); // Exécution de la requête  

         header('location:member.php'); // Redirection vers l'interface memebre 


    }else{

    	
    	echo "Veuillez entrer tous les champs";
       header('location:erreurs.php');

    }

}





?>
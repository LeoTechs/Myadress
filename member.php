<?php include('serveur.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Member_Space</title>
	<link rel="stylesheet" type="text/css" href="member.css">
	<link rel="stylesheet" type="text/css" href="ajouter.css">
	

</head>
<body>
	<center><h1 class="titre">ESPACE MEMBRE </h1></center>
	<span class="nav">
		<a href="#">Gerer les Contacts |</a>
		<a href="#">Reglages |</a>
		<a href="#" class="ajout" id="ajout" onClick="affich();">Ajouter un Contact</a>


		
	</span>
	<hr>
   </br>
   
   <div id="container">
   	 <div class="content">
   	 	<h3>Pseudo: </h3>
   	 	<hr>
   	 	<a href="#">Mon Compte</a>
   	 	<hr>
   	 	<a href="#">Modifier mes Infos</a>
   	 	<hr>
   	 	<a href="#">Rechercher Un contact</a>
   	 	<hr>
   	 	<a href="Connexion.php">Deconnexion</a>

   	 </div> 
   	 <div class="allcontent">
        <h1>LISTE DES ADRESSES</h1>

        <hr>
        <table border="1px">
        	<tr class="first-line">
        		<td>Avatar</td>
        		<td>Noms</td>
        		<td>Prenoms</td>
        		<td>Email</td>
        		<td>Téléphones</td>
        	</tr>

        </table>
  </div>   	
   	 </div>
   	


</body>
</br>
 <div class="footer">
        <h2>&copy Avril 2020  | Leo Nguimdo All Rights Reserved</h2>
    </div>
    <div id="addcontact">
		<form method="POST" action="member.php">
        <div class="wrapper">
                <div class="myform">
                    <div class="input-fields">
                        
                        <h1 class="titre2">Ajouter un contact </h1>
                        <hr>
                    </br>
                        <input type="text" class="input" placeholder="Nom">
                    </br>
                        <input type="text" class="input" placeholder="Prénom"></br>
                        <input type="text" class="input" placeholder="Email"></br>
                        <input type="text" class="input" placeholder="Téléphone : (+237)"></br>

                        <input type="Password" class="input" placeholder="Password"></br>

                        <input type="Password" class="input" placeholder=" Confirm Password"></br>

                
                    </div>
        
                    <div class="msg">
                        <input type="submit" name="ajouter" value="AJOUTER" onClick="masquer();">
                    </div>
                    <div class="msg2">
                        <button  onClick="masquer();">ANNULER</button> 
                    </div>
                    
                 </div>
    
            </div>
        </form>
        
			</div>

<script type="text/javascript">
	
	function affich(){
  
		document.getElementById('addcontact').style.display='block';
	}

	function masquer(){
         
         document.getElementById('addcontact').style.display='none';

	}

</script>
</html>

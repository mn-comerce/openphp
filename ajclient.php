<html>
<head>
	<title>Ajout Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>

<!-- ********************************************************************************************** -->

<div class="fou9">
	  <div class="nom">
	   <a href="acceuil.php"><h1>MN<span>COMMERCE</span></h1></a> 
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
              <a href="four.asp">  <span> admin</span></a>
            </div> 
      </div> 
</div>
<div class="khate"></div>

<!-- *********************************************************************************************** -->
<div class="left1">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="ajclient.php">Ajouter Client</a></li>
    <li class="mod"><a href="modrech.php">Modifier Client</a></li>
    <li class="sup"><a href="suprech.php">Supprimer Client</a></li>
    <li class="aff"><a href="affclient.php">Affichier les Clients</a></li>
    <li class="rech"><a href="affrech.php">Rechercher un Client</a></li>

</ul>   
</div>
<img class="image" src="img/user1.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	<form class="stdform stdform2" method="GET" action="traitementajProj.php">
                    	<p>
                        	<label>Societe  :</label>
                            <span class="field"><input type="text" name="societe" id="firstname2" class="longinput" /></span>
                        </p>
                    
                        <p>
                        	<label>Interlocuteur :</label>
                            <span class="field"><input type="text" name="interlocuteur" id="lastname2" class="longinput" /></span>
                        </p>

                         <p>
                            <label>Telephone :</label>
                            <span class="field"><input type="text" name="telephone" id="email2" class="longinput" /></span>
                        </p>
                        <p>
                            <label>Fax :</label>
                            <span class="field"><input type="text" name="fax" id="email2" class="longinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Email  :</label>
                            <span class="field"><input type="text" name="email" id="email2" class="longinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Adresse  :</label>
                            <span class="field"><textarea cols="80" rows="5" name="adresse" id="location2" class="longinput"></textarea></span>
                        </p>
                        
                        
                        
                        <p class="stdformbutton">
                        	  <input type="submit" class="rech" value="ajouter"/>

                            <input type="submit" class="reset radius2" value="Reset Button" />
                        </p>
    </form>
</div>








<!-- ************************* -->
<footer class="ta7t">
   <ul>
    <li><a href="">Client</a></li>
    <li><a href="">Fournisseur</a></li>
    <li><a href="">Produit</a></li>
    <li><a href="">Event</a></li>
    <li><a href="">Analytics</a></li>
   </ul>
 </footer>
<!-- ************************* -->

</body>
</html>
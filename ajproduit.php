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
    <li class="aj"><a href="ajproduit.php">Ajouter Produit</a></li>
    <li class="mod"><a href="modrechp.php">Modifier Produit</a></li>
    <li class="sup"><a href="suprechp.php">Supprimer Produit</a></li>
    <li class="aff"><a href="affproduit.php">Affichier les Produits</a></li>
    <li class="rech"><a href="affrechp.php">Rechercher un Produit</a></li>

</ul>  
</div>
<img class="image" src="img/chop.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	<form class="stdform stdform2" method="GET" action="traitementajProduit.php">
                    	
                        <p>
                        	<label>Reference  :</label>
                            <span class="field"><input type="text" name="reference" id="lastname2" class="longinput" /></span>
                        </p>

                         <p>
                            <label>Libelle  :</label>
                            <span class="field"><input type="text" name="libelle" id="email2" class="longinput" /></span>
                        </p>
                        
                        <p>
                        	<label>Prix unitaire  :</label>
                            <span class="field"><input type="text" name="prix" id="email2" class="longinput" /></span>
                        </p>
                        
                    
                        
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2">Ajouter</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
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
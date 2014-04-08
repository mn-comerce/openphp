<html>
<head>
	<title>Ajout Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>
<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query('select * from client');
$query2=mysql_query('select * from produit');
?>




<!-- ********************************************************************************************** -->

<div class="fou9">
	  <div class="nom">
	   <a href="acceuil.php"><h1>MN<span>COMMERCE</span></h1></a> 
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
              <a href="four.php">  <span> admin</span></a>
            </div> 
      </div> 
</div>
<div class="khate"></div>

<!-- *********************************************************************************************** -->
<div class="left1">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="ajcom.php">Ajouter Commande</a></li>
    <li class="mod"><a href="modrechcom.php">Modifier Commande</a></li>
    <li class="sup"><a href="suprechcom.php">Supprimer Commande</a></li>
    <li class="aff"><a href="affcom.php">Affichier les Commande</a></li>
    <li class="rech"><a href="affrechcom.php">Rechercher une Commande</a></li>

</ul>  
</div>

</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	<form class="stdform stdform2" method="GET" action="traitementajcom.php">
                    	 <p>
                            <label>Societe</label>
                            <span class="field">
                            
							<?php
							echo "<select name='societe' id='selection'>";
							while($rows1=mysql_fetch_assoc($query1))
                            // echo "<p>nom est:".$rows['nom']."</p>";
							
							

                              echo   "<option value=".$rows1['id_client'].">".$rows1['societe']." </option>";
                              
                           echo" </select>";
							?>
							
                            </span>
                        </p>
                    
                         <p>
                            <label>Produit</label>
                            <span class="field">
                            
							<?php
								echo "<select name='libelle' id='selection'>";
							while($rows2=mysql_fetch_assoc($query2))
                            // echo "<p>nom est:".$rows['nom']."</p>";
							
							

                              echo   "<option value=".$rows2['id_produit'].">".$rows2['libelle']." </option>";
                              
                           echo" </select>";
							?>
				
                            </span>
                        </p>
						
						
                     

                         <p>
                            <label>Quantite :</label>
                            <span class="field"><input type="text" name="quantite" id="email2" class="longinput" value="" /></span>
                        </p>
                        <p>
                            <label>Date :</label>
                            <span class="field"><input type="date" name="dte" id="email2" class="longinput" value="" /></span>
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
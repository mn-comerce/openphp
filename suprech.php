<html>
<head>
	<title>Modifier Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>
<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query('select * from client');
?>

<!-- ********************************************************************************************** -->
<div class="fou9">
	  <div class="nom">
	   <a href="acceuil.php"><h1>MN<span>COMMERCE</span></h1></a> 
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
               <a href="four.php"> <span> admin</span></a>
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
	<form class="stdform stdform2" method="GET" action="traitementsuppressionProj.php">
                        <p>
                            <label>Recherche  :</label>
                            <span class="field">
							<?php
							echo "<select name='societe' id='selection'>";
							while($rows1=mysql_fetch_assoc($query1))
                            // echo "<p>nom est:".$rows['nom']."</p>";
							
							

                              echo   "<option value=".$rows1['id_client'].">".$rows1['societe']." </option>";
                              
                           echo" </select>";
							?></span>
                        </p>
                        <input type="submit" class="rech"/>
                       
                     
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
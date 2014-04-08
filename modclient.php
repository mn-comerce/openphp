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
$code_client=$_GET['societe1'];
$query1=mysql_query("select * from client where id_client='$code_client'");
$rows1=mysql_fetch_assoc($query1);
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
	<form class="stdform stdform2" method="GET" action="traitementModificationProj.php">
                     
                           <p> 
                            <span class="field"><input type="hidden" name="id_client" id="id_client" class="longinput" value="<?php echo "".$rows1['id_client'].""?>" /></span>
                        </p>
						   
						   <p> <label>Societe  :</label>
                            <span class="field"><input type="text" name="societe" id="firstname2" class="longinput" value="<?php echo "".$rows1['societe'].""?>" /></span>
                        </p>
                    
                        <p>
                            <label>Interlocuteur :</label>
                            <span class="field"><input type="text" name="interlocuteur" id="lastname2" class="longinput" value="<?php echo "".$rows1['interlocuteur'].""?>" /></span>
                        </p>

                         <p>
                            <label>Telephone :</label>
                            <span class="field"><input type="text" name="telephone" id="email2" class="longinput"  value="<?php echo "".$rows1['telephone'].""?>"/></span>
                        </p>
                        <p>
                            <label>Fax :</label>
                            <span class="field"><input type="text" name="fax" id="email2" class="longinput" value="<?php echo "".$rows1['fax'].""?>"  /></span>
                        </p>
                        
                        <p>
                            <label>Email  :</label>
                            <span class="field"><input type="text" name="email" id="email2" class="longinput" value="<?php echo "".$rows1['email'].""?>"/></span>
                        </p>
                        
                        <p>
                            <label>Adresse  :</label>
                            <span class="field"><input type="text" name="adresse" id="location2" class="longinput" value="<?php echo "".$rows1['adresse'].""?>"/></span>
                        </p>
                        
                        
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2">Modifier</button>
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
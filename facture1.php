<html>
<head>
	<title>Ajout Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
    <link rel="stylesheet" type="text/css" href="css/facture.css">
</head>
<body>


<SCRIPT type="text/javascript">
 
 function calcul(){
 
 var t = f.ttc.value;
 var r = f.remise.value;
 var r1 = (r*t)/100;
 document.f.ttcf.value = t-r1;

 
 }
 <?php
$id_commande=$_GET['rech'];
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query("select * from livraison where id_commande='$id_commande'");
$rows1=mysql_fetch_assoc($query1);
?>




</SCRIPT>




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
<div class="left2">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="facture.php">Ajouter facture</a></li>
    <li class="sup"><a href="suprechf.php">Supprimer facture</a></li>
    <li class="aff"><a href="afffacture.php">Affichier les factures</a></li>
    <li class="rech"><a href="affrechf.php">Rechercher un facture</a></li>

</ul>  
</div>
<img class="image" src="img/fac.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right2">
	
    <form class="stdform stdform2" method="GET" action="impf.php" name="f">
                       
					   
					    <p>
                            <label>id_commande</label>
                            <span class="field"><input type="text" name="id_commande" id="email2" class="longinput" value="<?php echo "".$rows1['id_commande'].""?>" /></span>
                        </p>
						<p>
                            <label>id_livraison</label>
                            <span class="field"><input type="text" name="id_livraison" id="email2" class="longinput" value="<?php echo "".$rows1['id_livraison'].""?>" /></span>
                        </p>
						
						 <p>
                            <label>societe :</label>
                            <span class="field"><input type="text" name="societe" id="email2" class="longinput" value="<?php echo "".$rows1['societe'].""?>" /></span>
                        </p>
						<p>
                            <label>Date :</label>
                            <span class="field"><input type="text" name="dte" id="email2" class="longinput" value="<?php echo "".$rows1['dte'].""?>" /></span>
                        </p>
                        <p>
                            <label>produit :</label>
                            <span class="field"><input type="text" name="libelle" id="email2" class="longinput" value="<?php echo "".$rows1['libelle'].""?>" /></span>
                        </p>
						
						 <p>
                            <label>quantite :</label>
                            <span class="field"><input type="text" name="quantite" id="email2" class="longinput" value="<?php echo "".$rows1['quantite'].""?>" /></span>
                        </p>
						 <p>
                            <label>prix</label>
                            <span class="field"><input type="text" name="prix" id="email2" class="longinput" value="<?php echo "".$rows1['prix'].""?>" /></span>
                        </p>
						
						 
                        <p>
                            <label>Montant :</label>
                            <span class="field"><input type="text" name="montant" id="email2" class="longinput" value="<?php echo "".$rows1['montant'].""?>" /></span>
                        </p>
						
						 <p>
                            <label>TVA :</label>
                            <span class="field"><input type="text" name="tva" id="email2" class="longinput" value="<?php echo "".$rows1['tva'].""?>" /></span>
                        </p>
						<p>
                            <label>Totale :</label>
                            <span class="field"><input type="text" name="ttc" id="email2" class="longinput" value="<?php echo "".$rows1['ttc'].""?>" /></span>
                        </p>
						<p>
                            <label>Remise :</label>
                            <span class="field"><input type="text" name="remise" id="email2" class="longinput" value="" /></span>
                        </p>
						<p>
                            <label>Totale Finale :</label>
                            <span class="field"><input type="text" name="ttcf" id="email2" class="longinput" value="" /></span>
                        </p>
						<p>
                            <label>Reglement :</label>
                            <span class="field"><input type="text" name="reglement" id="email2" class="longinput" value="" /></span>
                        </p>
                        
                       
					   
					   
                        <p class="stdformbutton">
						<button class="submit radius2" type="button" onclick="calcul()">Calculer</button>
                            <button class="submit radius2">Etape 3</button>
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
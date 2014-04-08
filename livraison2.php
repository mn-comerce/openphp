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
 
 var p = f.prix.value;
 var q = f.quantite.value
 var m = q*p
 document.f.montant.value = q*p;
var t = f.tva.value
document.f.ttc.value = p*q*t
 
 }




</SCRIPT>

<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');

/*$societe=$_GET['societe'];
$libelle=$_GET['libelle'];
$quantite=$_GET['quantite'];
$dte=$_GET['dte'];*/
$id_commande=$_GET['rech'];
$query2=mysql_query("select * from produit, client, commande where produit.id_produit=commande.id_produit AND client.id_client=commande.id_client AND id_commande='$id_commande'");
//$query3=mysql_query("select * from produit, commande   where produit.id_produit=commande.id_produit");
//$query4=mysql_query("select * from client, commande   where client.id_client=commande.id_client");
$rows2=mysql_fetch_assoc($query2);
//$rows3=mysql_fetch_assoc($query3);
//$rows4=mysql_fetch_assoc($query4);
//echo"select * from produit, commande   where produit.id_produit=commande.id_produit";
//echo "select * from client, commande   where client.id_client=commande.id_client";
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
<div class="left2">

<img class="image" src="img/liv.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right2">
	
    <form name="f" class="stdform stdform2" method="GET" action="impl.php">
                     
						 <p>
                            <label>id_commande</label>
                            <span class="field"><input type="text" name="id_commande" id="email2" class="longinput" value="<?php echo "$id_commande"?>" /></span>
                        </p>
						
						 <p>
                            <label>societe :</label>
                            <span class="field"><input type="text" name="societe" id="email2" class="longinput" value="<?php echo "".$rows2['societe'].""?>" /></span>
                        </p>
						<p>
                            <label>Date :</label>
                            <span class="field"><input type="date" name="dte" id="email2" class="longinput" value="<?php echo "".$rows2['dte'].""?>" /></span>
                        </p>
                        <p>
                            <label>produit :</label>
                            <span class="field"><input type="text" name="libelle" id="email2" class="longinput" value="<?php echo "".$rows2['libelle'].""?>" /></span>
                        </p>
						
						 <p>
                            <label>quantite :</label>
                            <span class="field"><input type="text" name="quantite" id="email2" class="longinput" value="<?php echo "".$rows2['quantite'].""?>" /></span>
                        </p>
						 <p>
                            <label>prix</label>
                            <span class="field"><input type="text" name="prix" id="email2" class="longinput" value="<?php echo "".$rows2['prix'].""?>" /></span>
                        </p>
						
						 
                        <p>
                            <label>Montant :</label>
                            <span class="field"><input type="text" name="montant" id="email2" class="longinput" value="" /></span>
                        </p>
						
						 <p>
                            <label>TVA :</label>
                            <span class="field"><input type="text" name="tva" id="email2" class="longinput" value="" /></span>
                        </p>
						<p>
                            <label>Totale :</label>
                            <span class="field"><input type="text" name="ttc" id="email2" class="longinput" value="" /></span>
                        </p>
                        
                       
                        
                          <p class="stdformbutton">
						  <button class="submit radius2" type="button" onclick="calcul()">Calculer</button>
                        	<button class="submit radius2">Imprimmer</button>
							
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

<html>
<head>
	<title>Imprimer Devis</title>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="css/imd.css">

</head>
<body>
 <?php
$id_commande=$_GET['id_commande'];
$libelle=$_GET['libelle'];
$dte=$_GET['dte'];
$societe=$_GET['societe'];
$tva=$_GET['tva'];
$montant=$_GET['montant'];
$ttcf=$_GET['ttcf'];
$reglement=$_GET['reglement'];
$prix=$_GET['prix'];
$id_livraison=$_GET['id_livraison'];
$quantite=$_GET['quantite'];
$remise=$_GET['remise'];
$id_commande=$_GET['id_commande'];
$id_commande=$_GET['id_commande'];
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query("select * from client where societe='$societe'");
$query2=mysql_query("select * from produit where libelle='$libelle'");
$query3=mysql_query("select * from fournisseur ");
$query4=mysql_query("INSERT INTO facture VALUES ('','$id_livraison','$societe','$libelle','$quantite','$prix','$dte','$montant','$tva','$id_commande','$remise','$reglement','$ttcf')");
$rows1=mysql_fetch_assoc($query1);
$rows2=mysql_fetch_assoc($query2);
$rows3=mysql_fetch_assoc($query3);
?>
<div class="cont">
   <div class="info">
       <label class="" value="">   <?php echo "".$rows3['societe'].""  ?> </label><br>
       <label class="" value="">  <?php echo "".$rows3['ville'].""  ?>  </label><br>
       <label class="" value="">   <?php echo "".$rows3['telephone']."" ?>  </label><br>
   </div>
   <div class="lieu">
       martile le  : <label class="date1" value=""><?php echo "$dte"?></label>
   </div><br>
   <div class="societe1">
      <p>  <label value=""> <?php echo "".$rows1['societe'].""  ?> </label><br><br>
           <label value=""> <?php echo "".$rows1['adresse'].""  ?> </label>
       </p>
   </div>
   <div class="devis">
      <h2>Facture</h2>
   </div>
   <div class="date1">
      <label></label>
   </div>

       <table cellspacing='0'> 

    <thead>
        <tr>
           <th>Produit</th>
            <th>Prix unitaire</th>
			 <th>Quantite</th>
            <th>Montant</th>
			<th>TVA</th>
			<th>Remise</th>
			 <th>Prix TTC</th>
            
        </tr>
    </thead>
    <tbody>

        <tr>
            <td> <?php echo "$libelle"?></td>
            <td> <?php echo "$prix"?></td>
			 <td> <?php echo "$quantite"?> </td>
            <td> <?php echo "$montant"?></td>
           <td> <?php echo "$tva"?> </td>
		   <td> <?php echo "$remise"?> </td>
		   <td> <?php echo "$ttcf"?> </td>
        </tr>

    </tbody>
</table>

<div class="total">
   <b>Totale :</b><label value="" class="tot"><?php echo "$ttcf"?></label>
</div>
<div class="sin">
    signature
</div>

</div>
</body>
</html>
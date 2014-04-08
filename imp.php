
<html>
<head>
	<title>Imprimer Devis</title>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="css/imd.css">

</head>
<body>
<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$libelle=$_GET['libelle'];
$societe=$_GET['societe'];
$dte=$_GET['date'];
$query1=mysql_query("select * from client where societe='$societe'");
$query2=mysql_query("select * from produit where libelle= '$libelle'");
$query3=mysql_query('select * from fournisseur');
$rows1=mysql_fetch_assoc($query1);
$rows2=mysql_fetch_assoc($query2);
$rows3=mysql_fetch_assoc($query3);

?>





<div class="cont">
   <div class="info">
       <label class="" value="">  <?php echo "".$rows3['societe'] ?> </label><br>
       <label class="" value="">   <?php echo "".$rows3['ville'] ?> </label><br>
       <label class="" value="">   <?php echo "".$rows3['telephone'] ?>  </label><br>
   </div>
   <div class="lieu">
      Martil le : <label class="date1" value=""><?php echo "$dte"?></label>
   </div><br>
   <div class="societe1">
      <p>  <label value=""> <?php echo "".$rows1['societe'] ?> </label><br><br>
           <label value=""> <?php echo "".$rows1['adresse'] ?></label>
       </p>
   </div>
   <div class="devis">
      <h2>Devis</h2>
   </div>
   <div class="date1">
      <label></label>
   </div>

       <table cellspacing='0'> 

    <thead>
        <tr>
           <th>Produit</th>
            <th>Prix unitaire</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td> <?php echo "".$rows2['libelle'] ?> </td>
            <td> <?php echo "".$rows2['prix'] ?></td>
           
        </tr>

    </tbody>
</table>

<div class="total">
   <b>Totale :</b><label value="" class="tot"><?php echo "".$rows2['prix'] ?></label>
</div>
<div class="sin">
    signature
</div>

</div>
</body>
</html>
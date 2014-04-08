

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>la commande a été ajouté avec succéss  </p>
<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$id_client=$_GET['societe'];
$id_produit=$_GET['libelle'];
$quantite=$_GET['quantite'];
$dte=$_GET['dte'];
mysql_query("INSERT INTO commande  VALUES ('','$quantite','$dte','$id_client','3','$id_produit')");
header("Location:acceuil.php");
?>



</body>

</html>
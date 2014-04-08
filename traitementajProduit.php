

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>le produit est ajouté avec succée </p>
<?php
$reference=$_GET['reference'];
$libelle=$_GET['libelle'];
$prix=$_GET['prix'];

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
mysql_query ("INSERT INTO produit VALUES('','$reference','$libelle','$prix')");

?>



</body>

</html>
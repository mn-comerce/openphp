

<html>

<head>
<meta charset="utf-8"/>
<title>Traitement</title>
</head>

<body>
<?php
$pseudo=$_POST['pseudo'];
$password=$_POST['pass'];
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query("select * from fournisseur");
while($rows1=mysql_fetch_assoc($query1)){
if($pseudo==$rows1['pseudo'] && $password==$rows1['pass'])
header("Location:acceuil.php");
else
header("Location:index.php");
}
?>

</body>
</html>
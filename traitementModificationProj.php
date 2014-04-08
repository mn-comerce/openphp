

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>


<?php
$id_client=$_GET['id_client'];
$societe=$_GET['societe'];
$interlocuteur=$_GET['interlocuteur'];
$telephone=$_GET['telephone'];
$fax=$_GET['fax'];
$email=$_GET['email'];
$adresse=$_GET['adresse'];
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
mysql_query(" UPDATE client SET societe='$societe', interlocuteur='$interlocuteur', telephone='$telephone', fax='$fax',  email='$email',  adresse='$adresse'  WHERE  id_client='$id_client'");

header("Location:affclient.php");
?>


</body>

</html>
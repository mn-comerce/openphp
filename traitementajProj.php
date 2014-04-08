

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>


<?php
$societe=$_GET['societe'];
$interlocuteur=$_GET['interlocuteur'];
$telephone=$_GET['telephone'];
$fax=$_GET['fax'];
$email=$_GET['email'];
$adresse=$_GET['adresse'];
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
mysql_query ("INSERT INTO client VALUES('','$societe','$interlocuteur','$telephone','$fax','$email','$adresse')");
header("Location:ajclient.php");
?>



</body>

</html>
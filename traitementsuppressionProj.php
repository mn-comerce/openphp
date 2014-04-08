

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>La suppression </p>
<?php
$id_client=$_GET['societe'];
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
//echo "DELETE FROM client where id_client='$id_client'";
mysql_query(" DELETE FROM client where id_client='$id_client'");
header("Location:affclient.php");
?>


</body>

</html>
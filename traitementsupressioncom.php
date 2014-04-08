<%@ LANGUAGE="VBSCRIPT" %>

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>La suppression </p>

<%
Dim cnx,rs,id_commande
id_commande=request.queryString("rech")
set cnx= Server.CreateObject("ADODB.Connection")
cnx.Open(" Provider = Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb ")
set rs= Server.CreateObject("ADODB.RecordSet")
rs.Open "DELETE FROM commande WHERE id_commande="&id_commande&";",cnx
%>
</body>

</html>
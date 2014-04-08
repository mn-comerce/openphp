<%@ LANGUAGE="VBSCRIPT" %>

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>La suppression </p>

<%
Dim cnx,rs,libelle 
libelle=request.queryString("rech")
set cnx= Server.CreateObject("ADODB.Connection")
cnx.Open(" Provider = Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb ")
set rs= Server.CreateObject("ADODB.RecordSet")
rs.Open "DELETE FROM produit WHERE libelle='"&libelle&"';",cnx
%>
</body>

</html>
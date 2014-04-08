<%@ LANGUAGE="VBSCRIPT" %>

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>La modification </p>

<%
dim cnx,rs,id_fournisseur,societe,nom,prenom,pseudo,pass
set cnx=Server.CreateObject("ADODB.Connection")
cnx.Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb")
set rs=Server.CreateObject("ADODB.RecordSet")
id_fournisseur=Request.queryString("id_fournisseur")
societe=Request.queryString("societe")
nom=Request.queryString("nom")
prenom=Request.queryString("prenom")
pseudo=Request.queryString("pseudo")
pass=Request.queryString("pass")
rs.Open "UPDATE fournisseur SET societe='"&societe&"',nom='"&nom&"',prenom='"&prenom&"',pseudo='"&pseudo&"',pass='"&pass&"' WHERE  id_fournisseur="&id_fournisseur&";",cnx
%>

</body>

</html>
<%@ LANGUAGE="VBSCRIPT" %>

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>

<p>La modification </p>

<%
dim cnx,rs,id_commande,id_client,societe,libelle,quantite,dte
set cnx=Server.CreateObject("ADODB.Connection")
cnx.Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb")
set rs=Server.CreateObject("ADODB.RecordSet")
id_commande=Request.queryString("id_commande")
id_client=Request.queryString("id_client")
societe=Request.queryString("societe")
libelle=Request.queryString("libelle")
quantite=Request.queryString("quantite")
dte=Request.queryString("dte")

rs.Open "UPDATE commande SET quantite='"&quantite&"',dte='"&dte&"',societe='"&societe&"',libelle='"&libelle&"' WHERE  id_commande="&id_commande&";",cnx
%>

</body>

</html>
<html>
<head>
	<title>Modifier Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>

<!-- ********************************************************************************************** -->

<div class="fou9">
	  <div class="nom">
	   <a href="acceuil.asp"><h1>MN<span>COMMERCE</span></h1></a> 
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
              <a href="four.asp">  <span> admin</span></a>
            </div> 
      </div> 
</div>
<div class="khate"></div>

<!-- *********************************************************************************************** -->
<div class="left1">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="ajcom.asp">Ajouter Commande</a></li>
    <li class="mod"><a href="modrechcom.asp">Modifier Commande</a></li>
    <li class="sup"><a href="suprechcom.asp">Supprimer Commande</a></li>
    <li class="aff"><a href="affcom.asp">Affichier les Commande</a></li>
    <li class="rech"><a href="affrechcom.asp">Rechercher une Commande</a></li>

</ul> 
</div>

</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	

    <div class="pageheader notab">
            <h1 class="pagetitle">Affichage de toute les commandes</h1>
          
            
    </div>



    <table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

    <!-- Table Header -->
    
	<thead>
        <tr>
		     <th>id_commande</th>
           
			 <th>societe</th>
            <th>Libelle</th>
           
			<th>Quantite</th>
            <th>Date</th>
			
        </tr>


	</thead>
    <!-- Table Header -->

    <!-- Table Body -->
    <tbody>
<%
Dim cnx 
Dim rs
set cnx= Server.CreateObject("ADODB.Connection")
cnx.Open(" Provider = Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb ")
set rs= Server.CreateObject("ADODB.RecordSet")
rs.Open "SELECT * FROM commande;",cnx
do while not rs.eof 
%>
        <tr>
		     <td><%response.write(rs("id_commande"))%></td>
		   
            <td><%response.write(rs("societe"))%></td>
            <td><%response.write(rs("libelle"))%></td>
            <td><%response.write(rs("quantite"))%></td>
            <td><%response.write(rs("dte"))%></td>
        </tr>

<%
rs.MoveNext
loop
%>
    </tbody>
    <!-- Table Body -->

</table>




</div>








<!-- ************************* -->
<footer class="ta7t">
   <ul>
    <li><a href="">Client</a></li>
    <li><a href="">Fournisseur</a></li>
    <li><a href="">Produit</a></li>
    <li><a href="">Event</a></li>
    <li><a href="">Analytics</a></li>
   </ul>
 </footer>
<!-- ************************* -->

</body>
</html>
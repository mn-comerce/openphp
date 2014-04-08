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
    <li class="aj"><a href="ajproduit.asp">Ajouter Produit</a></li>
    <li class="mod"><a href="modrechp.asp">Modifier Produit</a></li>
    <li class="sup"><a href="suprechp.asp">Supprimer Produit</a></li>
    <li class="aff"><a href="affproduit.asp">Affichier les Produits</a></li>
    <li class="rech"><a href="affrechp.asp">Rechercher un Produit</a></li>

</ul>  
</div>
<img class="image" src="img/chop.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	

    <div class="pageheader notab">
            <h1 class="pagetitle">Affichage de toute les clients</h1>
         
            
    </div>



    <table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

    <!-- Table Header -->
    
	<thead>
        <tr>
            <th>Reference</th>
            <th>Libelle</th>
            <th>Prix</th>
			
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
rs.Open "SELECT * FROM produit;",cnx
do while not rs.eof 
%>
        <tr>
            <td><%response.write(rs("reference"))%></td>
            <td><%response.write(rs("libelle"))%></td>
            <td><%response.write(rs("prix"))%></td>
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
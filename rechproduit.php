<html>
<head>
	<title>Modifier Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>

<%

dim cnx,rs,libelle
libelle=Request.Querystring("rech")
response.write(societe)
set cnx=Server.CreateObject("ADODB.Connection")
cnx.Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb")
set rs=Server.CreateObject("ADODB.RecordSet")
rs.Open "SELECT * FROM produit WHERE libelle='"&libelle&"'",cnx

%>


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
	<form class="stdform stdform2" method="GET" action="traitementModificationProduit.asp">
                      
                      
                              <span class="field"><input type="hidden" name="id_produit" id="firstname2" class="longinput" value="<%response.write(rs("id_produit"))%>" /></span>
                        </p>
                        
                        <p>
                            <label>Reference  :</label>
                            <span class="field"><input type="text" name="reference" id="lastname2" class="longinput" value="<%response.write(rs("reference"))%>" /></span>
                        </p>

                         <p>
                            <label>Libelle  :</label>
                            <span class="field"><input type="text" name="libelle" id="email2" class="longinput" value="<%response.write(rs("libelle"))%>" /></span>
                        </p>
                        
                        <p>
                            <label>Prix unitaire  :</label>
                            <span class="field"><input type="text" name="prix" id="email2" class="longinput" value="<%response.write(rs("prix"))%>" /></span>
                        </p>
                        
                        
                      
    </form>
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
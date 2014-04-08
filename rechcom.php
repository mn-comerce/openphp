<html>
<head>
	<title>Ajout Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>

<%

dim cnx,rs,rs2,rs3,id_commande
id_commande=Request.Querystring("rech")
response.write(id_commande)
set cnx=Server.CreateObject("ADODB.Connection")
cnx.Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb")
set rs=Server.CreateObject("ADODB.RecordSet")
rs.Open "SELECT * FROM commande ",cnx

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
	<form class="stdform stdform2" method="post">
                   
                         <p>
                            <label>Societe</label>
                             <span class="field"><input type="text" name="societe" id="rech" class="longinput" value="<%response.write(rs("societe"))%>" /></span>
                        </p>
                    
                         <p>
                            <label>Produit</label>
                             <span class="field"><input type="text" name="libelle" id="rech" class="longinput" value="<%response.write(rs("libelle"))%>" /></span>
                        </p>

                         <p>
                            <label>Quantite :</label>
                            <span class="field"><input type="text" name="quantite" id="email2" class="longinput" value="<%response.write(rs("quantite"))%>" /></span>
                        </p>
                        <p>
                            <label>Date :</label>
                            <span class="field"><input type="text" name="dte" id="email2" class="longinput" value="<%response.write(rs("dte"))%>" /></span>
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
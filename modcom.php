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
rs.Open "SELECT * FROM commande , client WHERE id_commande="&id_commande&" and commande.id_client=client.id_client",cnx
set rs2=Server.CreateObject("ADODB.RecordSet")
rs2.Open "SELECT * FROM client",cnx
set rs3=Server.CreateObject("ADODB.RecordSet")
rs3.Open "SELECT * FROM produit",cnx

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
	<form class="stdform stdform2" method="GET" action="traitementModificationcom.asp">
                    	
 <p>                      
                            <span class="field"><input type="hidden" name="id_commande" id="id_client" class="longinput" value="<%response.write(rs("id_commande"))%>" /></span>
                        </p>
                         <p>
                            <label>Societe</label>
                            <span class="field">
                            <select name="societe" id="selection">
							<%do while not rs2.eof 
%>
                                <option value="<%response.write(rs2("societe"))%>"><%response.write(rs2("societe"))%></option>
                              <%
                              rs2.MoveNext
                               loop
                                %>
                            </select>
                            </span>
                        </p>
                    
                         <p>
                            <label>Produit</label>
                            <span class="field">
                            <select name="libelle" id="selection">
							<%do while not rs3.eof 
%>
                                <option value="<%response.write(rs3("libelle"))%>"><%response.write(rs3("libelle"))%></option>
                              <%
                             rs3.MoveNext
                             loop
                             %>
                               
                            </select>
                            </span>
                        </p>
						
						
                     

                         <p>
                            <label>Quantite :</label>
                            <span class="field"><input type="text" name="quantite" id="email2" class="longinput" value="<%response.write(rs("quantite"))%>" /></span>
                        </p>
                        <p>
                            <label>Date :</label>
                            <span class="field"><input type="text" name="dte" id="email2" class="longinput" value="<%response.write(rs("dte"))%>" /></span>
                        </p>
                       
                        
                          <p class="stdformbutton">
                        	<button class="submit radius2">Modifier</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
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
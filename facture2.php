<html>
<head>
	<title>Ajout Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
    <link rel="stylesheet" type="text/css" href="css/facture.css">
</head>
<body>


<%
dim cnx,rs,rs2,rs3,rs4,societe,libelle,dte,quantite,montant,tva,ttcf,prix,id_commande,remise,reglement

id_commande=Request.Querystring("id_commande")
libelle=Request.Querystring("libelle")
dte=Request.Querystring("dte")
societe=Request.Querystring("societe")
tva = Request.Querystring("tva")
montant = Request.Querystring("montant")
ttcf = Request.Querystring("ttcf")
prix = Request.Querystring("prix")
quantite= Request.Querystring("quantite")
remise= Request.Querystring("remise")
reglement= Request.Querystring("reglement")
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
<div class="left2">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="facture.asp">Ajouter facture</a></li>
    <li class="sup"><a href="suprechf.asp">Supprimer facture</a></li>
    <li class="aff"><a href="afffacture.asp">Affichier les factures</a></li>
    <li class="rech"><a href="affrechf.asp">Rechercher un facture</a></li>

</ul>  
</div>
<img class="image" src="img/fac.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right2">
	
    <form class="stdform stdform2" method="GET" action="impf.asp" name="f">
                         <p class="stdformbutton">
						
                            <button class="submit radius2">Imprimer</button>
                          
                        </p>
					   
					    <p>
                           
                            <span class="field"><input type="hidden" name="id_commande" id="email2" class="longinput" value="<%response.write(id_commande)%>" /></span>
                        </p>
						
						 <p>
                           
                            <span class="field"><input type="hidden" name="societe" id="email2" class="longinput" value="<%response.write(societe)%>" /></span>
                        </p>
						<p>
                        
                            <span class="field"><input type="hidden" name="dte" id="email2" class="longinput" value="<%response.write(dte)%>" /></span>
                        </p>
                        <p>
                           
                            <span class="field"><input type="hidden" name="libelle" id="email2" class="longinput" value="<%response.write(libelle)%>" /></span>
                        </p>
						
						 <p>
                          
                            <span class="field"><input type="hidden" name="quantite" id="email2" class="longinput" value="<%response.write(quantite)%>" /></span>
                        </p>
						 <p>
                           
                            <span class="field"><input type="hidden" name="prix" id="email2" class="longinput" value="<%response.write(prix)%>" /></span>
                        </p>
						
						 
                        <p>
                           
                            <span class="field"><input type="hidden" name="montant" id="email2" class="longinput" value="<%response.write(montant)%>" /></span>
                        </p>
						
						 <p>
                            
                            <span class="field"><input type="hidden" name="tva" id="email2" class="longinput" value="<%response.write("tva")%>" /></span>
                        </p>
					
                            
                            <span class="field"><input type="hidden" name="remise" id="email2" class="longinput" value="<%response.write(remise)%>" /></span>
                        </p>
						<p>
                            
                            <span class="field"><input type="hidden" name="ttcf" id="email2" class="longinput" value="<%response.write(ttcf)%>" /></span>
                        </p>
						<p>
                            
                            <span class="field"><input type="hidden" name="reglement" id="email2" class="longinput" value="<%response.write(reglement)%>" /></span>
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
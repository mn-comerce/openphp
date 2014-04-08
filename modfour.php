<html>
<head>
	<title>Modifier Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>


<%

dim cnx,rs
set cnx=Server.CreateObject("ADODB.Connection")
cnx.Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb")
set rs=Server.CreateObject("ADODB.RecordSet")
rs.Open "SELECT * FROM fournisseur",cnx

%>




<!-- ********************************************************************************************** -->

<div class="fou9">
	  <div class="nom">
	   <a href="acceuil.html"><h1>MN<span>COMMERCE</span></h1></a> 
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
                <span>Juan Dela Cruz</span>
            </div> 
      </div> 
</div>
<div class="khate"></div>

<!-- *********************************************************************************************** -->
<div class="left1">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="ajclient.html">Ajouter Client</a></li>
    <li class="mod"><a href="modclient.html">Modifier Client</a></li>
    <li class="sup"><a href="supclient.html">Supprimer Client</a></li>
    <li class="aff"><a href="affclient.html">Affichier les Clients</a></li>
    <li class="rech"><a href="rechclient.html">Rechercher un Client</a></li>

</ul>  
</div>
<img class="image" src="img/user1.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	<form class="stdform stdform2" method="GET" action="traitementModificationf.asp">
                     
                           <p> 
                            <span class="field"><input type="hidden" name="id_fournisseur" id="id_client" class="longinput" value="<%response.write(rs("id_fournisseur"))%>" /></span>
                        </p>
						   
						   <p> <label>Societe  :</label>
                            <span class="field"><input type="text" name="societe" id="firstname2" class="longinput" value="<%response.write(rs("societe"))%>" /></span>
                        </p>
                    
                        <p>
                            <label>Nom :</label>
                            <span class="field"><input type="text" name="nom" id="lastname2" class="longinput" value="<%response.write(rs("nom"))%>" /></span>
                        </p>

                         <p>
                            <label>Prenom :</label>
                            <span class="field"><input type="text" name="prenom" id="email2" class="longinput"  value="<%response.write(rs("prenom"))%>"/></span>
                        </p>
                        <p>
                            <label>Pseudo :</label>
                            <span class="field"><input type="text" name="pseudo" id="email2" class="longinput" value="<%response.write(rs("pseudo"))%>"  /></span>
                        </p>
                        
                        <p>
                            <label>pass  :</label>
                            <span class="field"><input type="text" name="pass" id="email2" class="longinput" value="<%response.write(rs("pass"))%>"/></span>
                        </p>
                        
                      
                        
                        
                        
                        <p class="stdformbutton">
                        	<input value="appliquer la modification"type="submit" class="submit radius2">
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
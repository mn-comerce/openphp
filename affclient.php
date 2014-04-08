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
	   <a href="acceuil.php"><h1>MN<span>COMMERCE</span></h1></a> 
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
              <a href="four.php">  <span> admin</span></a>
            </div> 
      </div> 
</div>
<div class="khate"></div>

<!-- *********************************************************************************************** -->
<div class="left1">
<div id="conteneur-menu2">
<ul>
    <li class="aj"><a href="ajclient.php">Ajouter Client</a></li>
    <li class="mod"><a href="modrech.php">Modifier Client</a></li>
    <li class="sup"><a href="suprech.php">Supprimer Client</a></li>
    <li class="aff"><a href="affclient.php">Affichier les Clients</a></li>
    <li class="rech"><a href="affrech.php">Rechercher un Client</a></li>

</ul>  
</div>
<img class="image" src="img/user1.png">
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
            <th>societe</th>
            <th>interlocuteur</th>
            <th>telephone</th>
			<th>fax</th>
            <th>email</th>
            <th>adresse</th>
        </tr>


	</thead>
    <!-- Table Header -->

    <!-- Table Body -->
    <tbody>
	<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query('select * from client');
$rows1=mysql_fetch_assoc($query1);

?>
 
<?php
  while($rows1=mysql_fetch_assoc($query1))
       echo "<tr>
          <td>".$rows1['societe']."</td>
           <td>".$rows1['interlocuteur']."</td>
           <td>".$rows1['telephone']."</td>
			<td>".$rows1['fax']."</td>
             <td>".$rows1['email']."</td>
           <td>".$rows1['adresse']."</td>
		</tr>";
		?>
        


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
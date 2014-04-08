<html>
<head>
	<title>Ajout Client</title>
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/accuil.css">
</head>
<body>
<?php

mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query('select * from commande');
?>


<!-- ********************************************************************************************** -->


<div class="fou9">
	  <div class="nom">
	   <a href="acceuil.php"><h1>MN<span>COMMERCE</span></h1></a> 
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

<img class="image" src="img/liv.png">
</div>
<!-- *********************************************************************************************** -->
<div class="right1">
	<form class="stdform stdform2" method="GET" action="livraison2.php">
                    	 <p>
                            <label>id_commande  :</label>
                            <span class="field">
							<?php
							echo "<select name='rech' id='selection'>";
							while($rows1=mysql_fetch_assoc($query1))
                            // echo "<p>nom est:".$rows['nom']."</p>";
							
							

                              echo   "<option value=".$rows1['id_commande'].">".$rows1['id_commande']." </option>";
                              
                           echo" </select>";
							?></span>
                        </p>
                       <button class="submit radius2">Rechercher</button>

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
<html>
<head><title>MNcommerce | Application gestion de cemmercial</title>
<link rel="stylesheet" type="text/css" href="css/acceuil.css">
</head>
<body>


<?php
mysql_connect('localhost',"root","");
mysql_select_db('gestioncommercial');
$query1=mysql_query('SELECT * FROM facture ORDER BY dte DESC');
$query2=mysql_query('SELECT * FROM client, commande where client.id_client=commande.id_client ORDER BY dte DESC');
//$rows=mysql_fetch_assoc($query);
//echo "nom est:".$rows['nom'];
?>



<div class="fou9">
	  <div class="nom">
	  <a href="acceuil.php">  <h1>MN<span>COMMERCE</span></h1></a>
    </div>
     <div class="sousnom">Application gestion commercial</div>

      <div class="janbe">
            <div class="user">
              <img src="img/four.png"><a href="four.php"> <span>Nom du fournisseur</span></a> 
            </div> 
      </div> 
</div>

<div class="khate"></div>

<div class="left">

 <div class="top">
                       <img src="img/client.png">     <h3>Top 5 Client</h3>
                        </div><!--contenttitle-->
 <table>
 <?php
 while($rows1=mysql_fetch_assoc($query1))
 echo "<tr>
            <td>".$rows1['societe']."</td>
            <td>".$rows1['ttcf']."</td>
        </tr>";
   

?>
 </table>
 <div class="top">
                            <h3>Les 3 derniere commande</h3>
                        </div>
 <table>
  <?php
 while($rows2=mysql_fetch_assoc($query2))
 echo "<tr>
            <td>".$rows2['dte']."</td>
            <td>".$rows2['societe']."</td>
        </tr>";
   

?>
  
 </table>



</div>

<div class="right">

	<div class="limen" >

	      <div class="menu1">
             <figure>
               <a href="ajclient.php"> <img src="img/user3.png" alt="car">
               <figcaption>
                  <h3>Gestion de Client</h3>
                  <p>
                   Le module Client gère l’ensemble des client de la société,
				   ce module est composé principalement de cinq sous menus pour effectuer les tâches d’ajout,
				   de modification, de recherche, d'affichage et de suppression d’un client
                  </p>
                 
    
                </figcaption></a>    
             </figure>
        </div>

         <div class="menu2">
             <figure>
              <a href="ajproduit.php">  <img src="img/chop1.png" alt="car">    
                <figcaption>
                  <h3>Gestion de Produit</h3>
                 
                  <p>
                   Le module produit gère l’ensemble des produits stockés dans la société, ce module est composé principalement de cinq sous menus pour effectuer les tâches d’ajout, de modification, de recherche, d'affichage et de suppression.
                   </p>
    
                </figcaption></a>
             </figure>
          </div>   
              <div class="menu3">
             <figure>
             <a href="devis.php">   <img src="img/dev.png" alt="car">   
                <figcaption>
                  <h3>Devis</h3>
                 
                  <p>
                    
					C'est la premiere etape dans le cycle de l'execution de l'application, le module de devis sert a acceuillir les demandes d'inspections concernant un certain 
					produit parvenant des client.
                   </p>
    
                </figcaption></a> 
             </figure>
           </div>
            <div class="menu4">
             <figure>
             <a href="facture.php">  <img src="img/liv1.png" alt="car">  
                <figcaption>
                  <h3>Facture</h3>
                 
                  <p>
                   C'est une pièce comptable par laquelle le fournisseur établit une créance vis-à-vis d'un client en vue de déclencher le paiement d'une dette, 
				   et il est basé sur la demande du client a vrais dir le bon de commande.
                   </p>
    
                </figcaption></a>  
             </figure>
           </div>

  </div>


       <div class="menu5">
             <article>
                <a href="editable.php"><img src="img/stat1.png" alt="car">
                <figcaption>
                  <h3>Statistique</h3>
                
    
                </figcaption>
             </article>
           </div>

      <div class="menu6">
             <section>
            <a href="ajcom.php"><img src="img/commm.png" alt="car"> 
                <figcaption>
                  <h3>Commande</h3>
                 
    
                </figcaption></a>   
             </section>
           </div>
       <div class="menu7">
             <section>
             <a href="livraison.php">   <img src="img/liv2.png" alt="car">   
                <figcaption>
                  <h3>Livraison</h3>
                
                </figcaption></a> 
             </section>
           </div>

     
</div>

<footer class="ta7t">
   <ul>
    <li><a href="">Client</a></li>
    <li><a href="">Fournisseur</a></li>
    <li><a href="">Produit</a></li>
    <li><a href="">Event</a></li>
    <li><a href="">Analytics</a></li>
   </ul>
 </footer>
</body>

</html>
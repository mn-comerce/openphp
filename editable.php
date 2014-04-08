<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>Statistique</title>
	<link href="css/basic.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/client.css">
	<link rel="stylesheet" type="text/css" href="css/acceuil.css">
	<script type="text/javascript" src="http://filamentgroup.github.com/EnhanceJS/enhance.js"></script>	
	<script type="text/javascript">
		// Run capabilities test
		enhance({
			loadScripts: [
				{src: 'js/excanvas.js', iecondition: 'all'},
				'js/jquery.js',
				'js/visualize.jQuery.js',
				'js/example-editable.js'
			],
			loadStyles: [
				'css/visualize.css',
				'css/visualize-dark.css'
			]	
		});   
    </script>
    <style type="text/css">
    	table { float: left; margin: 80px 40px 0 0;  }
    	td input { border: 1px solid orange; background: yellow; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; position: absolute; padding: 8px 0; text-align: center; width: 60px; margin: -17px 0 0 4px; font-size: 1.4em; }
    	td.input { padding: 0; position: relative; }
    	.visualize { float: left; }
    </style>
</head>
<body>


<%

dim cnx,rs,nom,prenom,adresse,nom_ville,fax,email,siteweb
set cnx=Server.CreateObject("ADODB.Connection")
cnx.Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=D:\GestionCommercial.mdb")
set rs=Server.CreateObject("ADODB.RecordSet")
rs.Open("SELECT * FROM livraison"),cnx



%>

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

<table>
	
	<caption>Statistique</caption>
	<thead>
		
		<tr>
			
			<th >Client</th>
			<th >Prix</th>
			
		</tr>
	</thead>
	<tbody>
	<%do while not rs.eof%>
		<tr>
		
			<th scope="row"><%response.write(rs("societe"))%></th>
			<td><%response.write(rs("prix"))%></td>
			
		</tr>
	<%
	rs.MoveNext
	Loop
	%>	
	</tbody>
</table>	

</body>
</html>
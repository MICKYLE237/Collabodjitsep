<?php 
//connexion a la base de donnees 
require_once('connect.inc.php');
//ecriture de la requete et verification du bouton utilise !!

	
//ecriture de la requete et execution de la requete 
$req = $db->prepare("SELECT * FROM `rappel` ORDER BY `ID_RA` DESC;");
$req->execute();
//on stocke le resultat dans un tableau associatif 
$rows=$req->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
 <html>
   <head>
      <title> TASK GEST -RAPPEL</title>
      <meta charset ="utf=8"/>
      <link rel="stylesheet" href="taches.css">
    </head>
    <body>
      <form action="" method="post">
		  <marquee bgcolor="sky-blue">  BIENVENUE SUR TASK GEST -RAPPEL .Voici la liste des rappels enregistrées !! Si vous en avez d'autres veuillez les enegistrer via les bouttons!!!</marquee> 
		    <div  class="butcol" >
			    
		      <input type="button" class="button" id="but_aj" value="Ajouter" onClick="window.open('IHM_rappel.php','main')">
		      
		    </div>
        <header id="showcase">
        <table border ="15px">
		    	<thead>
					<h1>LISTES DES RAPPELS</h1>  
					<tr>
						<th>ID</th>
						<th>TITRE</th>
						<th>NOTIFICATION</th>
						<th>DU</th>
						<th>AU</th>
                        <th>HEURE DU RAPPEL </th>
					    <th>ACTION</th>
					</tr>
				</thead>
				<tbody>
			 		<?php foreach($rows as $row): ?>
        			
                		<tr>
                   			<td><?= $row['ID_RA']?></td>
                    		<td><?= $row['NOM'] ?></td>
                    		<td><?= $row['RAPPEL'] ?></td>
                    		<td><?= $row['DATE'] ?></td>
							<td><?= $row['DATE1'] ?></td>
							<td><?= $row['TIME'] ?></td>
                    		<td><input type="button"  class="button1" id="but_sup" value="SUPPRIMER" name="SUP" onClick="window.open('pro_ta.php','main')">
							<a href="taches.php?edit= <?php echo $row['id']; ?>" class="btn btn-danger">Editer</a>
							</td>
                		</tr>
                 	<?php endforeach ?>
            	</tbody>
	  		</table>
    </header>
	  	  
    
	   
	</body>
</html>	
<?php 
//connexion a la base de donnees 
require_once('connect.inc.php');
//ecriture de la requete et verification du bouton utilise !!

	
//ecriture de la requete et execution de la requete 
$req = $db->prepare("SELECT * FROM `evenement` ORDER BY `ID_EV` DESC;");
$req->execute();
//on stocke le resultat dans un tableau associatif 
$rows=$req->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
   <head>
    	<title> TASK GEST -EVENEMENT</title>
      	<meta charset ="utf=8"/>
      	<link rel="stylesheet" href="taches.css">
    </head>
    <body>
		<form action="" method="post">
		<marquee bgcolor="sky-blue">  BIENVENUE SUR TASK GEST -EVENEMENT .Voici la liste des evenement enregistrées !! Si vous en avez d'autres veuillez les enegistrer via les bouttons!!!</marquee> 
			<div  class="butcol" >
				<input type="button" class="button" id="but_mo" value="Modifier">
		  		<input type="button" class="button" id="but_aj"   value="Ajouter" onClick="window.open('IHM_evenement.php','main')">
		  		<input type="button" class="button" id="but_su" value="Supprimer">
		  	 </div>
        <header id="showcase">
	  		<table border ="15px">
		    	<thead>
					<h1>LISTES DES EVENEMENTS</h1>  
					<tr>
						<th>ID</th>
						<th>TITRE</th>
						<th>DATE</th>
						<th>LIEU</th>
						<th>NOTIFICATION</th>
                        <th>DESCRIPTION </th>
					
					</tr>
				</thead>
				<tbody>
			 		<?php foreach($rows as $row): ?>
        			
                		<tr>
                   			<td><?= $row['ID_EV']?></td>
                    		<td><?= $row['TITRE_EV'] ?></td>
                    		<td><?= $row['DATE_EV'] ?></td>
                    		<td><?= $row['LIEU_EV'] ?></td>
							<td><?= $row['NOTIFICATION_EV'] ?></td>
							<td><?= $row['DESCRIPTION_EV'] ?></td>
                    		
                		</tr>
                 	<?php endforeach ?>
            	</tbody>
	  		</table>
    </header>
	  	  
	 
	   
	</body>
</html>	
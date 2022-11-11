<?php 
//connexion a la base de donnees 
require_once('connect.inc.php');
//ecriture de la requete et verification du bouton utilise !!

	
//ecriture de la requete et execution de la requete 
$req = $db->prepare("SELECT * FROM `tache`;");
$req->execute();
//on stocke le resultat dans un tableau associatif 
$rows=$req->fetchAll(PDO::FETCH_ASSOC);
//gestion du bouton ajoter
if(isset($_POST["Ajouter"])){
	$link_address1 = 'IHM_tache.php';
echo "<a href='$link_address1'>Index Page</a>";
}
?>

<!DOCTYPE html>
<html>
   <head>
        <title> TASK GEST -TACHES</title>
      <meta charset ="utf=8"/>
      <link rel="stylesheet" href="taches.css">

    </head>
    <body>
		   <form action="" method="post">
		<marquee bgcolor="sky-blue">  BIENVENUE SUR TASK GEST -TACHES .Voici la liste des taches enregistrées !! Si vous en avez d'autres veuillez les enegistrer via les bouttons!!!</marquee> 
		<div  class="butcol" >
			 <input type="button" class="button" id="but_mo" value="Modifier" name="Modifier">
			 
			    <input type="button"  class="button" id="but_aj" value="Ajouter" name="Ajouter" onClick="window.open('IHM_tache.php','main')">
			
			 <input type="button" class="button" id="but_su" value="Supprimer" name="Supprimer">
			 
		</div>
        <header id="showcase">
		<table border ="15px">
		    	  <thead>
					    <h1>LISTES DES TACHES</h1>  
					      <tr>
						      <th>ID</th>
						      <th>TITRE</th>
						      <th>NOTIFICATION</th>
						      <th>DATE</th>
						      <th>DATE1</th>
                  <th>REPETER </th>
                </tr>
				</thead>
				<tbody>
			 		<?php foreach($rows as $row): ?>
        			
                		<tr>
                   			<td><?= $row['ID_TA']?></td>
                    		<td><?= $row['TITRE'] ?></td>
                    		<td><?= $row['NOTIFICATION'] ?></td>
                    		<td><?= $row['DATE'] ?></td>
							          <td><?= $row['DATE1'] ?></td>
							          <td><?= $row['REPETER'] ?></td>
                    		
                		</tr>
                 	<?php endforeach ?>
            	</tbody>
	  		</table> 
			
    	</header>
	  	  
	 
	   
	</body>
</html>	
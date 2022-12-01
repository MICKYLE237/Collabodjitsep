<?php 
session_start();
//connexion a la base de donnees 
require_once('connect.inc.php');
//ecriture de la requete et verification du bouton utilise !!
    $ID = $_GET['TITRE'];
	$req = $db->prepare("DELETE FROM `tache` WHERE `tache`.`ID_TA` = $ID"); 
    $req->execute();
//ecriture de la requete et execution de la requete 
$req = $db->prepare("SELECT * FROM `tache`;");
$req->execute();
//on stocke le resultat dans un tableau associatif 
$rows=$req->fetchAll(PDO::FETCH_ASSOC);
//gestion du bouton ajouter
if(isset($_POST["Ajouter"])){
	$link_address1 = 'IHM_tache.php';
echo "<a href='$link_address1'></a>";
}
//gestion du bouton modifier
if(isset($_POST['modif'])){
	$ID = $_POST['ID'];
    $TITRE = $_POST['TITRE'];
        $DATE = $_POST['DATE'];
        $DATE1 = $_POST['DATE1'];
        $REPETER = $_POST['REPETER'];
        $NOTIFICATION = $_POST['NOTIFICATION'];

	$sql = "UPDATE `tache` SET `TITRE` = $TITRE , `NOTIFICATION` = $NOTIFICATION, `DATE` = $DATE, `DATE1` = $DATE1, `REPETER` = $REPETER WHERE `tache`.`ID_TA` = $ID;";
	$stmt= $db->prepare($sql);
    $stmt->execute();
}

//gestion du bouton suppprimer
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
			<form action="" method="get">
		<marquee bgcolor="sky-blue">  BIENVENUE SUR TASK GEST -TACHES .Voici la liste des taches enregistrées !! Si vous en avez d'autres veuillez les enegistrer via les bouttons!!!</marquee> 
		<div  class="butcol" >
			 
			    <input type="button"  class="button" id="but_aj" value="Ajouter" name="Ajouter" onClick="window.open('IHM_tache.php','main')">
			
			 
			 
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
							  <th>REPETER</th>
							  <th>ACTION</th>
							                  </tr>
				</thead>
				<tbody>
			 		<?php foreach($rows as $row): ?>
        			
                		<tr>
                   		    <td><input type="text" name="IDENTIFIANT" value="<?php echo $row['ID_TA']; ?>"></td>
                    		<td name="TITRE"><?= $row['TITRE'] ?></td>
                    		<td name="NOTIFICATION"><?= $row['NOTIFICATION'] ?></td>
                    		<td name="DATE"><?= $row['DATE'] ?></td>
     						<td name="DATE1" ><?= $row['DATE1'] ?></td>
							<td name="REPETER"><?= $row['REPETER'] ?></td>
							<td>
							<input type="button"  class="button1" id="but_sup" value="SUPPRIMER" name="SUP" onClick="window.open('pro_ta.php','main')">
							<a href="taches.php?edit= <?php echo $row['id']; ?>" class="btn btn-danger">Editer</a>
							<a href="taches.php?delete= <?php echo $row['id']; ?>" class="btn btn-danger">Supprimer</a></td>
                    		
                		</tr>
                 	<?php endforeach ?>
            	</tbody>
	  		</table> 
			
    	</header>
	  	  
	 
	   
	</body>
</html>	
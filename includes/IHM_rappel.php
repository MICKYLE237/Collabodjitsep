<?php 

// On inclut la connexion à la base
require_once('connect.inc.php');


if(isset($_POST['Enregistrer'])){
    if(isset($_POST['TITRE']) && !empty($_POST['TITRE'])
    && isset($_POST['date']) && !empty($_POST['date'])
    && isset($_POST['date1']) && !empty($_POST['date1'])
    && isset($_POST['rappel']) && !empty($_POST['rappel'])
    && isset($_POST['TIME']) && !empty($_POST['TIME'])){
        $TITRE = $_POST['TITRE'];
        $DATE = $_POST['date'];
        $DATE1 = $_POST['date1'];
        $RAPPEL = $_POST['rappel'];
        $TIME = $_POST['TIME'];

        
        $sql = ("INSERT INTO `rappel` ( `NOM`, `RAPPEL`, `DATE`, `DATE1`, `TIME`) VALUES (:TITRE, :RAPPEL, :DATE, :DATE1, :TIME)");
        $stmt= $db->prepare($sql);
        $stmt->bindparam(':TITRE',$TITRE);
        $stmt->bindparam(':TIME',$TIME);
        $stmt->bindparam(':RAPPEL',$RAPPEL);
        $stmt->bindparam(':DATE1',$DATE1);
        $stmt->bindparam(':DATE',$DATE);
        
        
        $stmt->execute();
        echo 'evenement enregistré avec succès !!!!!!';
             
    }
        }
  
?>

<html lang="fr">
<head>
    <link rel="stylesheet" href="IHM_eve.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerer un rappel</title>
</head>
<body>
     <div class="text">
         <h1 >  Ajouter un rappel </h1> 
     
         <form action="" method="post">
          <label for="TITRE">Nom du rappel:</label>
           <input type ="text" name="TITRE" id="RA_TI" /> <br><br>
       
           <label for="Periode">Date :</label>
            <input type ="date" name="date" id="RA_PE" /> AU
            <input type ="date" name="date1" id="RA_PE" /> <br><br>
           
            <label for="Periode1">HEURE DU RAPPEL :</label> 
            <input type="time" name="TIME"/>
         
           
           <br><br><label for="rappel">Nombre de fois:</label>
            <select name="rappel" id="ra_ta">
            <option value="tous les jours" id="RA_LI_NA">tous les jours</option>
            <option value="toutes les semaine" id="RA_LI_PA">toutes les semaine</option>
            <option value="tous les mois" id="RA_LI_MO">tous les mois</option>
            <option value="personnaliser" id="RA_LI_KI">personnaliser</option><br><br>
            </select>
         <input id="EV_EN" type ="submit" value="Enregistrer" name="Enregistrer"  /> <br><br>
         <input id="EV_EN" type ="submit" value="Annuler" name="Annuler"  /> <br><br>
         <input type="button"  class="button" id="but_aj" value="Voir l'element enregistré" name="Ajouter" onClick="window.open('rappel.php','main')">

      </div>
    
    </form>
</body>
</html>
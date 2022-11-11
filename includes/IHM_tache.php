<?php 

// On inclut la connexion à la base
require_once('connect.inc.php');


if(isset($_POST['Enregistrer'])){
    if(isset($_POST['TITRE']) && !empty($_POST['TITRE'])
    && isset($_POST['date']) && !empty($_POST['date'])
    && isset($_POST['date1']) && !empty($_POST['date1'])
    && isset($_POST['NOTIFICATION']) && !empty($_POST['NOTIFICATION'])
    && isset($_POST['repeter']) && !empty($_POST['repeter'])){
        $TITRE = $_POST['TITRE'];
        $DATE = $_POST['date'];
        $DATE1 = $_POST['date1'];
        $REPETER = $_POST['repeter'];
        $NOTIFICATION = $_POST['NOTIFICATION'];
        $sql = ("INSERT INTO `tache` ( `TITRE`, `NOTIFICATION`, `DATE`, `DATE1`, `REPETER`) VALUES (:TITRE, :NOTIFICATION, :DATE, :DATE1, :REPETER)");
        $stmt= $db->prepare($sql);
        $stmt->bindparam(':TITRE',$TITRE);
        $stmt->bindparam(':NOTIFICATION',$NOTIFICATION);
        $stmt->bindparam(':REPETER',$REPETER);
        $stmt->bindparam(':DATE1',$DATE1);
        $stmt->bindparam(':DATE',$DATE);
        
        
        $stmt->execute();
        echo 'evenement enregistré avec succès !!!!!!';
             
    }
        }
  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="IHM_eve.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer une Tache dans TASKGEST</title>
</head>
<body>
     <div class="text">
         <h1 >  AJOUTER UNE TACHE </h1> 
     
         <form action="" method="post">
          <label for="TITRE">Ajouter un TITRE:</label>
           <input type ="text" name="TITRE" id="TA_TI" /> <br><br>
       
           <label for="Periode">Periode de la tache:</label>
            <input type ="date" name="date" id="TA_PE" /> Au
            <input type ="date" name="date1" id="TA_PE" /> <br><br>
           
            
          
         <label for="NOTIFICATION"> Ajouter un son de notification:</label>
         <select name="NOTIFICATION" id="EV_NOTIF">
            <option value="UN" id="EV_NOTIF_UN" href="UN.mp3" name="un" >TENOR-UN</option>
            <option value="ZERO" id="EV_NOTIF_0" href="0.mp3" name="ZERO" >TENOR-ZERO</option>
            <option value="DADJU" id="EV_NOTIF_DA" href="2.mp3" name="DEUX" >DADJU-GAZ MAGWETE</option> <br><br>
         </select>
           
           <br><br><label for="repeter">repeter la tache:</label>
            <select name="repeter" id="re_ta">
            <option value="jours" id="re_LI_NA">3 jours</option>
            <option value="1 semaine" id="re_LI_PA">1 semaine</option>
            <option value="1 mois" id="EV_LI_BU">1 mois</option>
            <option value="personnaliser" id="EV_LI_KI">personnaliser</option><br><br>
            </select>
         <input id="EV_EN" type ="submit" value="Enregistrer" name="Enregistrer"  /> <br><br><br>
         <input type="button"  class="button" id="but_aj" value="Voir l'element enregistré" name="Ajouter" onClick="window.open('taches.php','main')">
         

      </div>
    
    </form>
</body>
</html>
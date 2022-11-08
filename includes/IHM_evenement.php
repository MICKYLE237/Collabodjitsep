
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="IHM_eve.css"
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un evenement dans TASKGEST</title>
</head>
<body>
     <div class="text">
         <h1 >  AJOUTER UN EVENEMENT </h1> 
     
         <form action="recup_donnees_eve.php" method="post">
          <label for="TITRE">Ajouter un TITRE:</label>
           <input type ="text" name="TITRE" id="EV_TI" /> <br><br>
       
           <label for="DATE">Date de l'evenement:</label>
            <input type ="date" name="date" id="EV_DA" /> <br><br>
           
            <label for="DESCRIPTION"> Ajouter une description:</label>
         <input type ="text" name="DECRIRE" id="EV_DE" /> <br><br>
          
         <label for="NOTIFICATION"> Ajouter un son de notification:</label>
         <select name="NOTIFICATION" id="EV_NOTIF">
            <option value="UN" id="EV_NOTIF_UN" href="UN.mp3" name="un" >TENOR-UN</option>
            <option value="ZERO" id="EV_NOTIF_0" href="0.mp3" name="ZERO" >TENOR-ZERO</option>
            <option value="DADJU" id="EV_NOTIF_DA" href="2.mp3" name="DEUX" >DADJU-GAZ MAGWETE</option> <br><br>
         </select>
           
           <br><br><label for="LIEU">Lieu d'evenement:</label>
            <select name="lieu" id="EV_LI">
            <option value="Douala" id="EV_LI_DO">Douala</option>
            <option value="Yaounde" id="EV_LI_YA">Yaounde</option>
            <option value="Bafoussam" id="EV_LI_BA">Bafoussam</option>
            <option value="Buea" id="EV_LI_BUt">Buea</option>
            <option value="Limbe" id="EV_LI_LI">Limbe</option>
            <option value="Abidjian" id="EV_LI_AB">Abidjian</option>
            <option value="Lagos" id="EV_LI_LA">Lagos</option>
            <option value="Dakar" id="EV_LI_DA">Dakar</option>
            <option value="Le Caire" id="EV_LI_LC">Le Caire</option>
            <option value="Nairobie" id="EV_LI_NA">Nairobie</option>
            <option value="Paris" id="EV_LI_PA">Paris</option>
            <option value="Bruxelle" id="EV_LI_BU">Bruxelle</option>
            <option value="Kiev" id="EV_LI_KI">Kiev</option><br><br>
            </select>
         <input id="EV_EN" type ="submit" value="Enregistrer" name="Enregistrer"  /> <br><br>
         

      </div>
    
    </form>
</body>
</html>
<?php
// On inclut la connexion à la base
require_once('connect.inc.php');



  if(isset($_POST['TITRE']) && !empty($_POST['TITRE'])
        && isset($_POST['date']) && !empty($_POST['date'])
        && isset($_POST['DECRIRE']) && !empty($_POST['DECRIRE'])
        && isset($_POST['NOTIFICATION']) && !empty($_POST['NOTIFICATION'])
        && isset($_POST['lieu']) && !empty($_POST['lieu'])){
            $titre = $_POST['TITRE'];
            $date = $_POST['date'];
            $descri = $_POST['DECRIRE'];
            $lieu = $_POST['lieu'];
            $notification = $_POST['NOTIFICATION'];
            $sql = " INSERT INTO `evenement`( `TITRE_EV`,  `DATE_EV`, `LIEU_EV`, `NOTIFICATION_EV` , `DESCRIPTION_EV`) VALUES(' $titre ' ,' $date ',' $lieu',' $notification ',' $descri ')";
           if ( $sql = " INSERT INTO `evenement`( `TITRE_EV`,  `DATE_EV`, `LIEU_EV`, `NOTIFICATION_EV` , `DESCRIPTION_EV`) VALUES(' $titre ' ,' $date ',' $lieu',' $notification ',' $descri ')"){
            $query = $db->prepare($sql);
            $query->bindparam(':titre', $titre);
            $query->bindparam(':date', $date);
            $query->bindparam(':description', $descri);
            $query->bindparam(':lieu', $lieu);
            $query->bindparam(':notification', $notification);
            $query->execute();
            $sql->execute();
            echo 'evenement enregistré avec succès !!!!!!';
           };      
           
        }
        

?>
<!DOCTYPE html>
//<html lang="en">
//<head>
//  <meta charset="UTF-8">
//  <meta http-equiv="X-UA-Compatible" content="IE=edge">
//  <meta name="viewport" content="width=device-width, initial-scale=1.0">
//  <title>Document</title>
</head>
<body>
//   <h1>AFFICHAGE DU NOUVEL EVENEMENT </h1>
//<table border ="15px" cellspacing="00px" cellpadding="0,5px">
        <thead>
            <th>TITRE</th>
            <th>DUREE</th>
            <th>DESCRIPTION</th>
            <th>LIEU </th>
            
        </thead>
        <tr  >
        <td id="c"><?php echo $_POST['TITRE'];?></td>
        <td id="c"><?php echo $_POST['DUREE'];?></td> 
        <td id="c"><?php echo $_POST['DESCRIPTION'];?></td>
        <td id="c"><?php echo $_POST['lieu'];?></td>
        </tr>      
</body>

</html>
<?php 

// On inclut la connexion à la base
require_once('connect.inc.php');


if(isset($_POST['valider'])){
    if(isset($_POST['NOM']) && !empty($_POST['NOM'])
    && isset($_POST['PRENOM']) && !empty($_POST['PRENOM'])
    && isset($_POST['EMAIL']) && !empty($_POST['EMAIL'])
    && isset($_POST['NOMUTILISATEUR']) && !empty($_POST['NOMUTILISATEUR'])
    && isset($_POST['PASSWORD']) && !empty($_POST['PASSWORD'])){
       
        
        $NOM = $_POST['NOM'];
        $PRENOM = $_POST['PRENOM'];
        $EMAIL = $_POST['EMAIL'];
        $PWD = $_POST['PASSWORD'];
        $NOMUTILISATEUR = $_POST['NOMUTILISATEUR'];
        $sql = ("INSERT INTO `utilisateur` ( `Nom_utilisateur`, `Email`, `Mot_passe`, `Nom`, `prenom`) VALUES (:NOMUTILISATEUR, :EMAIL, :PWD, :NOM, :PRENOM)");
        $stmt= $db->prepare($sql);
        $stmt->bindparam(':NOMUTILISATEUR',$NOMUTILISATEUR);
        $stmt->bindparam(':EMAIL',$EMAIL);
        $stmt->bindparam(':PWD',$PWD);
        $stmt->bindparam(':NOM',$NOM);
        $stmt->bindparam(':PRENOM',$PRENOM);
        
        $stmt->execute();
        echo 'evenement enregistré avec succès !!!!!!';
             
    }
        }
  
?>      
        

    




<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="compte.css">
        <script language="javascript" src="compte.js"></script>
        
        <title>Creation de compte</title>
    </head>
    <body>
    <form action="" method="post">
        <div id="compte">

            <input type="image" id="profile" name="profile_photo" placeholder="photo"  src="s1.png" required="capture" > <br>
            <input type="text" id="name1" placeholder="NOM" name="NOM" >
            <input type="text" id="PRENOM" placeholder="PRENOM" name="PRENOM" > <br> <br>
            <input type="email" id="email" placeholder="E-mail" name="EMAIL" > <br> <br>
            <input type="text" id="name_user" placeholder="NOM d'utilisateur" name="NOMUTILISATEUR" > <br> <br>
            <input type="password" id="password" placeholder="Mot de Passe" name="PASSWORD"> <br> <br>
            <label for="text" id="warning"> Tous les champs sont obligatoires !!!</label> <br><br>
            <button id="valider"  name="valider" >Valider</button>
            <button id="annuler" onclick="annuler()">Annuler</button>
        </div>

    </body>
</html>

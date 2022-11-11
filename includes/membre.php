<?php
    function inscription(){
        global $bdd ;
        extract($_POST);
        $validation = true ;
        $erreur = [];
        if(empty($NOM)||empty($PRENOM)||empty($EMAIL)||empty($PWD)||empty($NOMUTILISATEUR)||empty($PWDCONF)){
            $validation = false;
            $erreur[] ="Tous les champs sont obligatoires ";
        }
         if(existe($NOMUTILISATEUR)){
            $validation = false ;
            $erreur[]=" ce nom d'utilisateur est deja pris veuillez chercher un autre !!!";
         }
         if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)){
            $validation = false ;
            $erreur[] ="l'adresse email n'est pas du tout valide";
         }
        elseif($PWDCONF != $PWD){
            $validation = false ;
         $erreur[]="votre mot de passe est different de celui de confirmation";
         }

        if($validation){
            $inscription = $bdd->prepare("INSERT INTO `utilisateur` ( `Nom_utilisateur`, `Email`, `Mot_passe`, `Nom`, `prenom`) VALUES (:NOMUTILISATEUR, :EMAIL, :PWD, :NOM, :PRENOM)");");
            $inscription->execute([
            "Nom_utilisateur" => htmlentities($NOMUTILISATEUR),
            "Email" => htmlentities($EMAIL),
            "Mot_passe" => password_hash($PWD,  PASSWORD_DEFAULT),
            "Nom" => htmlentities($NOM),
            "prenom" => htmlentities($PRENOM), ])}
        }
       return $erreur ;
    }

   function existe($NOMUTILISATEUR){
        global $bdd ;
        $resultat = $bdd->prepare("SELECT COUNT (*) FROM  `utilisateur` WHERE  `utilisateur`.`Nom_utilisateur` = ?");
        $resultat->execute([$NOMUTILISATEUR]);
        $resultat = $resultat->fetch()[0];
        return $resultat ;

    }
?>